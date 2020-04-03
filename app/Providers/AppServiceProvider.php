<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::include('admin.component.card.form', 'form');
        Blade::include('admin.component.input','input');
        Blade::include('admin.component.tools','tools');
        Blade::include('admin.component.tables.index','table');
        Blade::include('admin.component.modal','modal');
        Blade::include('admin.component.tables.menu','tableMenu');
        Blade::include('admin.component.tables.users','tableUsers');
        Blade::include('admin.component.tables.carousel','tableCarousel');
    }
}
