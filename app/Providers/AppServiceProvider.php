<?php

namespace App\Providers;

use App\Interfases\OfficalTaxiInterFase;
use App\Interfases\OurTaxiNumReposInterfase;
use App\Interfases\WhyChooseUsRepistorInterfase;
use Illuminate\Support\ServiceProvider;
use App\Repositories\OfficalTaxiRepositor;
use App\Repositories\OurTaxiNumRepositor;
use App\Repositories\WhyChooseUsRepistor;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(OfficalTaxiInterFase::class, OfficalTaxiRepositor::class) ;
        $this->app->bind(OurTaxiNumReposInterfase::class, OurTaxiNumRepositor::class);
        $this->app->bind(WhyChooseUsRepistorInterfase::class, WhyChooseUsRepistor::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
