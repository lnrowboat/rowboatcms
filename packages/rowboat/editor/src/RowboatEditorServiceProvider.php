<?php

namespace Rowboat\Editor;

//use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RowboatEditorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'editor');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->register(Providers\RouteServiceProvider::class);
     //  $this->app->bind('Rowboat\Editor\Repositories\ComponentEditorRepositoryInterface',
     //                   'Rowboat\Editor\Repositories\TemplateEditorRepository');
    }
}
