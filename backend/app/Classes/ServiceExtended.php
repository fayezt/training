<?php

namespace App\Classes;

use LaravelEasyRepository\Service;

class ServiceExtended extends Service
{
    public function paginator($count=9){
        return $this->mainInterface->query()->paginate($count);
    }
    public function all_with(array $with){
        return $this->mainInterface->query()->with($with)->get();
    }
}
