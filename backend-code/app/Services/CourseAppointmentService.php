<?php

namespace App\Services;

use App\Models\CourseAppointment;
use Illuminate\Database\Eloquent\Collection;
use LaravelEasyRepository\Service;
use App\Repositories\Interfaces\CourseAppointmentRepositoryInterface;

class CourseAppointmentService extends Service {

     /**
     * don't change $this->mainInterface variable name
     * because used in extends service class
     */
     protected $mainInterface;

    public function __construct(CourseAppointmentRepositoryInterface $mainInterface)
    {
      $this->mainInterface = $mainInterface;
    }
    public function getAvailableCourse($start=null,$end=null): Collection|array
    {
        $start=$start??now();

        return $this->mainInterface->query()
            ->with('course')
            ->whereDate('start','>=',$start)
            ->when($end,function ($query)use($end){
                $query->whereDate('end','<=',$end);
            })
            ->get();
    }
    public function booking($customer_id,$appointment_id): bool
    {
        /** @var CourseAppointment $appointment */
        $appointment=$this->find($appointment_id);
        if($appointment->available>10)
            throw new \Exception("Sorry All Available Appointments Are Booking !");
        if($appointment->customers()->find($customer_id))
            throw new \Exception("Sorry You Have Already Booking !");
        else
            $appointment->customers()->sync([$customer_id]);

        return true;


    }
    // Define your custom methods :)
}
