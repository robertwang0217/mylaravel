<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // bind analytic interface and repository
        $this->app->bind(
            'App\Repositories\PropertyAnalytic\PropertyAnalyticInterface',
            'App\Repositories\PropertyAnalytic\PropertyAnalyticRepository'
        );
    }
}
