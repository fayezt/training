<?php

namespace App\Facades;

use App\Models\User;
use Illuminate\Support\Facades\Facade;

/**
 *
 * @method static paginator(int $count=5,array $with=[])
 */
class CategoryService extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'CategoryService';
    }


}
