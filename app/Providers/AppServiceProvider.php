<?php

namespace App\Providers;
use URL;
use Illuminate\Support\ServiceProvider;
use Facebook\Facebook;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      URL::forceScheme('https');
      //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton(Facebook::class, function ($app) {
          return new Facebook(config('facebook.Config'));
      });
    }
}
