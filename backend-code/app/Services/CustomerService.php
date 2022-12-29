<?php

namespace App\Services;

use App\Traits\Service\Authenticatable;
use LaravelEasyRepository\Service;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CustomerService extends Service {

    use Authenticatable;
     /**
     * don't change $this->mainInterface variable name
     * because used in extends service class
     */
     protected $mainInterface;

    public function __construct(CustomerRepositoryInterface $mainInterface)
    {
      $this->mainInterface = $mainInterface;
    }

    // Define your custom methods :)
}
