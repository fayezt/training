<?php

namespace App\Services;

use App\Traits\Service\Authenticatable;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Hash;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use LaravelEasyRepository\Service;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService extends Service
{
    use Authenticatable;

    /**
     * don't change $this->mainInterface variable name
     * because used in extends service class
     */
    protected $mainInterface;

    public function __construct(UserRepositoryInterface $mainInterface)
    {
        $this->mainInterface = $mainInterface;
    }


}
