<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{

public function updateCouponPoint(Request $request)
{
    // Validate the request
    $request->validate([
        'coupon_point' => 'required|numeric', // numeric allows decimal values
    });

    // Get the currently authenticated user
    $user = auth()->user();

    // Convert the incoming coupon point value to a decimal
    $couponPoint = floatval($request->coupon_point);
    Log::info('Coupon Points: ' . $couponPoints);

    // Update the user's "coupon_point" points
    $user->coupon_point += $couponPoint;
    $user->save();

    return response()->json(['message' => 'Coupon points updated successfully']);
}

}
