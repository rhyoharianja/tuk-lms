<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Http\ViewComposers\MenuAdminComposer;

class ComposerServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', MenuAdminComposer::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
