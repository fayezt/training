<?php

namespace App\Facades;

use App\Models\User;
use Illuminate\Support\Facades\Facade;

/**
 *
 * @method static paginator()
 */
class CourseAppointmentService extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'CourseAppointmentService';
    }


}
