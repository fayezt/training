<?php

namespace App\Http\Controllers\Api\V1\Customer;

use App\Facades\CourseAppointmentService;
use App\Facades\CourseService;
use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\AvailableCourseRequest;
use App\Http\Requests\Api\V1\CourseDeleteRequest;
use App\Http\Requests\Api\V1\CourseStoreRequest;
use App\Http\Requests\Api\V1\CourseUpdateRequest;
use App\Http\Requests\BookingAppointmentRequest;
use App\Http\Resources\AppointmentResource;
use App\Http\Resources\CourseResource;
use App\Http\Resources\CourseResourceCollection;
use App\Models\Course;
use App\Models\CourseAppointment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CourseController extends ApiBaseController
{
    public function __construct()
    {
        if(request()->hasHeader('Authorization'))
            $this->middleware('auth:sanctum');
    }

    public function datesCourse(Course $course){
        return $this->returnWithCollection(
          collection:AppointmentResource::collection($course->appointment),
          message: "Successfully Get Dates"
        );
    }
//    public function availableCourse(AvailableCourseRequest $request){
//        $courses=CourseAppointmentService::getAvailableCourse($request->get('start'),$request->get('end'));
//
//        return $this->returnWithCollection(
//            collection:new CourseResourceCollection($courses),
//            message: "Successfully Get Available Course"
//        );
//    }
    public function index(){
        $start=request()->get('start');
        $end=request()->get('end');
        if($start&&$end)
            $result=CourseService::getBetweenDate($start,$end);
        else
            $result=CourseService::paginator();

        return $this->returnWithPaginator(
            "Successfully Get Courses",
            $result,
            new CourseResourceCollection($result->items(),true)
        );
    }
    public function show(Course $course){
        return $this->returnWithModel(new CourseResource($course,true));
    }
    public function related(Course $course){
        return $this->returnWithCollection(new CourseResourceCollection($course->related()));
    }
    public function bookingAppointment(CourseAppointment $appointment,BookingAppointmentRequest $request){
        try{
        CourseAppointmentService::booking(auth()->id(),$appointment->id);
        return $this->returnWithSuccess("Successfully Booking Appointment");
        }catch (\Exception $exception){
            return $this->returnWithError($exception->getMessage());
        }
    }
}
