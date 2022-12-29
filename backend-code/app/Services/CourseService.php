<?php

namespace App\Services;

use App\Classes\ServiceExtended;
use Illuminate\Database\Query\Builder;
use LaravelEasyRepository\Service;
use App\Repositories\Interfaces\CourseRepositoryInterface;

class CourseService extends ServiceExtended {

     /**
     * don't change $this->mainInterface variable name
     * because used in extends service class
     */
     protected $mainInterface;

    public function __construct(CourseRepositoryInterface $mainInterface)
    {
      $this->mainInterface = $mainInterface;
    }

    public function getBetweenDate($start,$end,$count=9){
        return $this->mainInterface->query()->with(['appointments'])->whereHas('appointments',function ($query)use($start,$end){
            return $query->whereDate('start','<=',$start)->whereDate('end','>=',$end);
        })->paginate($count);
    }
    // Define your custom methods :)
}
