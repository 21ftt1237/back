<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Order;



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
            // Debugging: Print product_id and quantity for each cart item
            Log::info('Product ID: ' . $cartItem->product_id);
            Log::info('Quantity: ' . $cartItem->quantity);
            // Create a new order using the cart item's data
            $order = new Order();
            $order->user_id = $user->id;
            $order->product_id = $cartItem->product_id; // Set product ID
            $order->quantity = $cartItem->quantity;     // Set quantity
            $order->created_at = now();
            $order->updated_at = now();
            $order->save(); // Save the order to the 'orders' table
        }

        // Log success message
        Log::info('Orders created from cart for user ' . $user->id);

        // Respond with a success message
        return response()->json(['message' => 'Orders created successfully.']);
    } catch (\Exception $e) {
        // Handle exceptions and errors

        // Log an error message
        Log::error('Error creating orders from cart for user ' . $user->id . ': ' . $e->getMessage());

        // Respond with an error message
        return response()->json(['message' => 'Error creating orders.']);
    }
}


    
}
