<?php

namespace App\Providers;

use App\View\Components\CardComponent;
use App\View\Components\ModalComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('mhb-card', CardComponent::class);
        Blade::component('mhb-modal', ModalComponent::class);
    }
}
