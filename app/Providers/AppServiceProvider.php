<?php

namespace App\Providers;

use App\Models\cart;
use App\Models\Category;
use Illuminate\Support\Facades\View;
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
        //
        $cart = cart::getCartDetail();
        View::share(['cart' => $cart, 'side_nav' => Category::sideNav()]);
    }
}
