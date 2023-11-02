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
            // Fetch the currently logged-in user's cart items
            $user = auth()->user(); // Get the currently authenticated user
            $cart = Cart::where('user_id', $user->id)
                ->with('product') // Assuming you have defined a 'product' relationship in the Cart model
                ->get();
            $view->with('cart', $cart);
        });
    }

}
