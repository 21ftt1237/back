<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

public function updateRedeemCoupon(Request $request)
{
    // Validate the request
    $request->validate([
        'redeem_coupon' => 'required|integer',
    });

    // Get the currently authenticated user
    $user = auth()->user();

    // Update the user's redeem_coupon points
    $user->redeem_coupon += $request->redeem_coupon;
    $user->save();

    return response()->json(['message' => 'Redeem coupon points updated successfully']);
}

}
