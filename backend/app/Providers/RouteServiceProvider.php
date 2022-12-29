<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';
    protected $api_v1_admin_namespace = 'App\\Http\\Controllers\\Api\\V1\\Admin';
    protected $api_v1_admin_auth_namespace = 'App\\Http\\Controllers\\Api\\V1\\Admin\\Auth';

    protected $api_v1_customer_namespace = 'App\\Http\\Controllers\\Api\\V1\\Customer';
    protected $api_v1_customer_auth_namespace = 'App\\Http\\Controllers\\Api\\V1\\Customer\\Auth';
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    protected $namespace='App\\Http\\Controllers';
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware(['web'])
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware(['api','auth:sanctum'])
                ->prefix('admin/api/v1')
                ->namespace($this->api_v1_admin_namespace)
                ->group(base_path('routes/admin/api/v1/api.php'));

            Route::middleware(['api'])
                ->prefix('admin/api/v1/auth')
                ->namespace($this->api_v1_admin_auth_namespace)
                ->group(base_path('routes/admin/api/v1/auth.php'));

            Route::middleware(['api','auth:sanctum'])
                ->prefix('customer/api/v1')
                ->namespace($this->api_v1_customer_namespace)
                ->group(base_path('routes/customer/api/v1/api.php'));

            Route::middleware(['api'])
                ->prefix('customer/api/v1/auth')
                ->namespace($this->api_v1_customer_auth_namespace)
                ->group(base_path('routes/customer/api/v1/auth.php'));

            Route::middleware(['api'])
                ->prefix('api/v1')
                ->namespace($this->api_v1_customer_namespace)
                ->group(base_path('routes/guest/api/v1/api.php'));

        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60);
        });
    }
}
