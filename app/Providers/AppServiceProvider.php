<?php

namespace App\Providers;

use App\View\Components\CardComponent;
use App\View\Components\HighlightCardComponent;
use App\View\Components\ModalComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        Blade::component('mhb-card', CardComponent::class);
        Blade::component('mhb-modal', ModalComponent::class);
        Blade::component('mhb-highlight-card', HighlightCardComponent::class);
    }
}
