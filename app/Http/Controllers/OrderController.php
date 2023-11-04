<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use Illuminate\Support\Facades\dd;



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

        // Retrieve cart items for the user
        $cartItems = $user->cart;

        // Debugging: Print cart items to check their contents
    Log::info('Cart Items: ' . json_encode($cartItems));

        try {
            // Start a database transaction for atomicity
            \DB::beginTransaction();

          foreach ($cartItems as $cartItem) {
    // Debugging: Print cart item to check its contents
    Log::info('Cart Item: ' . json_encode($cartItem));

    // Create a new order using the cart item's data
    $order = new Order($cartItem->toArray());

    // Set the user_id for the order
    $order->user_id = $user->id;

    // Save the order to the 'orders' table
    $order->save();
}

            // Delete the cart items that were transferred to orders
            $user->cart()->detach($cartItems);

            // Commit the database transaction
            \DB::commit();

            // Respond with a success message
            return response()->json(['message' => 'Orders created successfully']);
        } catch (\Exception $e) {
            // Roll back the database transaction on error
            \DB::rollBack();

            // Handle exceptions and errors

            // Log an error message
            \Log::error('Error creating orders from cart for user ' . $user->id . ': ' . $e->getMessage());

            // Respond with an error message
            return response()->json(['message' => 'Error creating orders']);
        }
    }

    
}
