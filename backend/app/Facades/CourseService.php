<?php

namespace App\Facades;

use App\Models\User;
use Illuminate\Support\Facades\Facade;

/**
 *
 * @method static paginator()
 * @method static getBetweenDate(bool $start, bool $end)
 */
class CourseService extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'CourseService';
    }


}
