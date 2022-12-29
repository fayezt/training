<?php

namespace App\Facades;

use App\Models\User;
use Illuminate\Support\Facades\Facade;

/**
 * @method static getByCredential(string $email, string $password)
 *
 */
class UserService extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'UserService';
    }


}
