<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;


class OrderController extends Controller
{
    public function updateCouponPoint(Request $request)
    {
        Log::info('Received coupon_point: ' . $request->coupon_point);

        
        // Validate the request
        $request->validate([
            'coupon_point' => 'required|numeric', // numeric allows decimal values
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Convert the incoming coupon point value to a decimal
        $couponPoint = floatval($request->coupon_point);
        Log::info('Coupon Points: ' . $couponPoint);

        // Update the user's "coupon_point" points
        $user->coupon_point += $couponPoint;
        $user->save();

        return response()->json(['message' => 'Coupon points updated successfully']);
    }

public function placeOrder(Request $request)
{
    // Retrieve the currently authenticated user
    $user = auth()->user();

    // Retrieve all cart items for the user
    $cartItems = $user->cart;

    try {
        foreach ($cartItems as $cartItem) {
            // Create a new product in the 'products' table with the same data
            $newProduct = new Product();
            $newProduct->product_id = $cartItem->product_id; // Copy the product_id
            $newProduct->quantity = $cartItem->quantity;     // Copy the quantity
            // Set other fields if needed

            $newProduct->save();
        }

        // Clear the user's cart
        $user->cart()->delete();

        // Log success message
        Log::info('Products copied from cart to products table for user ' . $user->id);

        // Respond with a success message
        return response()->json(['message' => 'Products copied successfully.']);
    } catch (\Exception $e) {
        // Handle exceptions and errors

        // Log an error message
        Log::error('Error copying products from cart to products table for user ' . $user->id . ': ' . $e->getMessage());

        // Respond with an error message
        return response()->json(['message' => 'Error copying products.']);
    }
}

    
}
