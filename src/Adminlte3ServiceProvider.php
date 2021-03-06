<?php

namespace wolfsyncro\adminlte3;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class Adminlte3ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(realpath(__DIR__.'/../views'), 'adminlte3');
        // load routes
        Route::group([
            'middleware' => 'web',
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
        });
        
 
        $this->publishes([
        realpath(__DIR__.'/../views') => base_path('resources/views'),
        ]);       

        //this for css and js
        $this->publishes([ realpath(__DIR__.'/../assets') => public_path('wolfsyncro/adminlte3'),
        ], 'public');
    }
}
