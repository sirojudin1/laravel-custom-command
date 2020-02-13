<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiJarvisRoutes();

        $this->mapWebJarvisRoutes();

        $this->mapAdminJarvisRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebJarvisRoutes()
    {
        Route::domain('jarvis')
            ->middleware('web')
            ->namespace($this->namespace.config('constants.JARVIS_WEB_FOLDER'))
            ->group(base_path('routes/'.config('constants.JARVIS_ROOT').'/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiJarvisRoutes()
    {
        Route::domain('api.jarvis')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/'.config('constants.JARVIS_ROOT').'/api.php'));
    }

    protected function mapAdminJarvisRoutes()
    {
        Route::domain('admin.jarvis')
             ->middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/'.config('constants.JARVIS_ROOT').'/admin.php'));
    }
}
