<?php

namespace Tumihub\loap;


use Illuminate\Support\ServiceProvider;

class LoapServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        /*
    	|--------------------------------------------------------------------------
    	| Set the Package Views Namespace
    	|--------------------------------------------------------------------------
    	*/

        $this->loadViewsFrom(__DIR__.'/Resources/views', 'loap');

        /*
        |--------------------------------------------------------------------------
        | Publish Views and Config
        |--------------------------------------------------------------------------
        */

        $this->publishes([
            __DIR__.'/Resources/views' => base_path('resources/views/vendor/loap'),
            __DIR__.'/../config/loap.php' => base_path('config/loap.php')
        ], 'loap');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        /*
    	|--------------------------------------------------------------------------
        | Merge User-Customized Config Values
        |--------------------------------------------------------------------------
        */

        $this->mergeConfigFrom(
            __DIR__.'/../config/loap.php', 'loap'
        );


        /*
    	|--------------------------------------------------------------------------
    	| Include the Package Routes File.
    	|--------------------------------------------------------------------------
    	*/

        require __DIR__ . '/routes.php';

    }

}
