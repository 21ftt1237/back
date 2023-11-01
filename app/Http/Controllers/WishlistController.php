<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{

public function index()
{
    // Fetch the currently logged-in user's wishlist items
    $user = auth()->user(); // Get the currently authenticated user
    $wishlistItems = Wishlist::where('user_id', $user->id)
        ->with('product') // Assuming you have defined a 'product' relationship in the Wishlist model
        ->get();

    return view('wishlist', compact('wishlistItems'));
}
  
}
