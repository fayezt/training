<?php

namespace App\Providers;

use App\Http\Resources\CourseResource;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseAppointment;
use App\Models\Customer;
use App\Models\User;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\CourseAppointmentRepository;
use App\Repositories\Eloquent\CourseRepository;
use App\Repositories\Eloquent\CustomerRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\CategoryService;
use App\Services\CourseAppointmentService;
use App\Services\CourseService;
use App\Services\CustomerService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind(UserRepositoryInterface::class,UserService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('UserService',function (){
            return new UserService(new UserRepository(new User()));
        });

        $this->app->singleton('CourseService',function (){
            return new CourseService(new CourseRepository(new Course()));
        });
        $this->app->singleton('CustomerService',function (){
            return new CustomerService(new CustomerRepository(new Customer()));
        });
        $this->app->singleton('CourseAppointmentService',function (){
            return new CourseAppointmentService(new CourseAppointmentRepository(new CourseAppointment()));
        });
        $this->app->singleton('CategoryService',function (){
            return new CategoryService(new CategoryRepository(new Category()));
        });
    }
}
