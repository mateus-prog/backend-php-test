<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api/api.php'));

            $this->loadApiRoute("product");

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    private function loadApiRoute($routeName)
    {
        Route::prefix("api")
            ->namespace($this->namespace)
            ->group(base_path("routes/api/{$routeName}.php"));
    }
}
