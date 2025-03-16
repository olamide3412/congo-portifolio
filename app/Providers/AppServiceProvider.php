<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        //
        Model::unguard();


        Paginator::useTailwind();

         // Set the timezone for Carbon (and all date/time functions)

        //config(['app.timezone' => 'Africa/Lagos']);
        //date_default_timezone_set(config('app.timezone'));

        Carbon::setLocale(config('app.locale'));
    }
}
