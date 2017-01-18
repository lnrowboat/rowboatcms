<?php

namespace Rowboat\Core;

use Illuminate\Support\ServiceProvider;

class RowboatCoreServiceProvider extends ServiceProvider
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
       $this->app->register(Providers\RouteServiceProvider::class);
       $this->app->bind('Rowboat\Core\Repositories\ComponentRepositoryInterface',
                        'Rowboat\Core\Repositories\TemplateRepository');
       $this->app->bind('Rowboat\Core\Entities\ComponentContainerInterface',
                        'Rowboat\Core\Entities\TemplateContainer');
       $this->app->bind('Rowboat\Core\Entities\ComponentContentInterface',
                        'Rowboat\Core\Entities\TemplateContent');
    }
}

