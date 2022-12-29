<?php

namespace App\Http\Controllers\Api\V1\Customer;

use App\Facades\CategoryService;
use App\Facades\CourseAppointmentService;
use App\Facades\CourseService;
use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\AvailableCourseRequest;
use App\Http\Requests\Api\V1\CourseDeleteRequest;
use App\Http\Requests\Api\V1\CourseStoreRequest;
use App\Http\Requests\Api\V1\CourseUpdateRequest;
use App\Http\Resources\AppointmentResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CourseResource;
use App\Http\Resources\CourseResourceCollection;
use App\Http\Resources\CustomerResource;
use App\Models\Course;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends ApiBaseController
{
   public function __invoke()
   {
       return $this->returnWithModel(
           new CustomerResource(auth()->user())
       );
   }
}
