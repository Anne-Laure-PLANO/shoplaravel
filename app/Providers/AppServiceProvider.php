<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void # s'exécute avant que le Framework ait fini de se charger
    {
        //
    }

    /**
     * Bootstrap any application services.
     * Contient les informations globales, utilisées sur toutes les View.
     */
    public function boot(): void # s'exécute après que le framework soit chargé.
    {
        Paginator::useBootstrapFive();

        View::composer('*', function ($view) {
            $cartCount = (session('cart'))? count(session('cart')) : 0 ;
            $view->with('cartCount', $cartCount);
        });
    }
}
