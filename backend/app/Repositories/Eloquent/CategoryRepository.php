<?php

namespace App\Repositories\Eloquent;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository extends Eloquent implements CategoryRepositoryInterface{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
