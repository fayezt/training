<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Facades\CourseAppointmentService;
use App\Facades\CourseService;
use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\AppointmentStoreRequest;
use App\Http\Requests\Api\V1\AppointmentUpdateRequest;
use App\Http\Requests\Api\V1\CourseDeleteRequest;
use App\Http\Requests\Api\V1\CourseStoreRequest;
use App\Http\Requests\Api\V1\CourseUpdateRequest;
use App\Http\Resources\CourseResource;
use App\Http\Resources\CourseResourceCollection;
use App\Models\Course;
use App\Models\CourseAppointment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CourseController extends ApiBaseController
{
    public function index(): JsonResponse
    {
        $coursesPaginator=CourseService::paginator();

        return $this->returnWithPaginator(
            "Successfully Get Courses",
            $coursesPaginator,
            new CourseResourceCollection($coursesPaginator->items())
        );
    }

    public function store(CourseStoreRequest $request){
        $course=CourseService::create($request->validated());

        return $this->returnWithModel(
            new CourseResource($course),
            "Successfully Store New Course"
        );
    }
    public function show(Course $course){
        return $this->returnWithModel(
            new CourseResource($course,true),
            "Successfully Show Details Course"
        );
    }
    public function update(Course $course,CourseUpdateRequest $request){
        CourseService::update($course->id,$request->validated());

        return $this->returnWithModel(
            new CourseResource(CourseService::find($course->id)),
            "Successfully Update Course"
        );
    }
    public function destroy(Course $course,CourseDeleteRequest $request){

        $course->delete();

        return $this->returnWithSuccess(
            "Successfully Delete Course"
        );
    }
    public function setAppointment(Course $course,AppointmentStoreRequest $request){
        CourseAppointmentService::create($request->merge(['course_id'=>$course->id])->toArray());

        return $this->returnWithSuccess(
            "Successfully Set Appointment To Course"
        );
    }
    public function updateAppointment(Course $course,CourseAppointment $appointment,AppointmentUpdateRequest $request){
        CourseAppointmentService::update($appointment->id,$request->validated());

        return $this->returnWithSuccess(
            "Successfully Update Appointment Of Course"
        );
    }
}
