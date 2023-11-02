<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

public function index()
{
    // Fetch the currently logged-in user's wishlist items
    $user = auth()->user(); // Get the currently authenticated user
    $cart = Cart::where('user_id', $user->id)
        ->with('product') // Assuming you have defined a 'product' relationship in the Wishlist model
        ->get();

    return view('layouts.header', compact('cart'));
}
  
}
