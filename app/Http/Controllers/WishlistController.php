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
   
    $user = auth()->user(); 
    $wishlistItems = Wishlist::where('user_id', $user->id)
        ->with('product') 
        ->get();

    return view('Wishlist.BruZoneWishlist', compact('wishlistItems'));
}
  
}
