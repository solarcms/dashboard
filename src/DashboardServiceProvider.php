<?php
/**
 * Created by PhpStorm.
 * User: n0m4dz
 * Date: 11/16/15
 * Time: 4:28 PM
 */

namespace Solarcms\Dashboard;

use Illuminate\Support\ServiceProvider as ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{


    public function boot()
    {
        // Route
        include __DIR__ . DIRECTORY_SEPARATOR .'routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // View
        $this->loadViewsFrom(__DIR__ . DIRECTORY_SEPARATOR .'Views', 'Dashboard');

        $this->app['Dashboard'] = $this->app->share(function ($app) {
            return new Dashboard;
        });
    }
}