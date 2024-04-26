<?php

namespace ServicesMercury\Mercury;

use Illuminate\Support\ServiceProvider;

class MercuryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([
        __DIR__ . '/../../config/mercury.php' => config_path('mercury.php'),
      ], 'mercury');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
			$this->mergeConfigFrom(
        __DIR__ . '/../../config/mercury.php', 'mercury'
	    );
      $this->app->bind('mercury', function($app)
      {
        return $this->app->make('ServicesMercury\Mercury\Mercury');
      });
    }
}
