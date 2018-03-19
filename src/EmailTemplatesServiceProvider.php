<?php namespace Asuk\EmailTemplates;

/**
 * This file is part of Notify,
 *
 * @license CC
 * @package Coderjp\ase
 */

use Illuminate\Support\ServiceProvider;

class EmailTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'et');
    }
//
//    /**
//     * Register the service provider.
//     *
//     * @return void
//     */
    public function register()
    {
        //
    }
//
//    /**
//     * Register the application bindings.
//     *
//     * @return void
//     */
//    private function registerNotify()
//    {
//        $this->app->bind('notify', function ($app) {
//            return new Notify($app);
//        });
//    }
//
//    /**
//     * Merges user's and notify's configs.
//     *
//     * @return void
//     */
//    private function mergeConfig()
//    {
//        $this->mergeConfigFrom(
//            __DIR__.'/config/config.php', 'notify'
//        );
//    }
}
