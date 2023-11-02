<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cart;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
   public function boot(): void
    {
        view()->composer('layouts.header', function ($view) {
            $cart = [];

            if (Auth::check()) {
                // The user is authenticated, so fetch their cart items
                $user = Auth::user();
                $cart = Cart::where('user_id', $user->id)
                    ->with('product')
                    ->get();
            }

            $view->with('cart', $cart);
        });
    }

}
