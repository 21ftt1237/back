<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
    // Retrieve cart items and other necessary data from the request
    $cartItems = $request->input('cart_items');
    // Other order-related data

    // Add a debug message for the "place order" operation
    Log::info('Placing the order for user ' . auth()->user()->id);

    try {
        // Create a new order
        $order = new Order();
        $order->user_id = auth()->user()->id;
        // Set other order-related data

        // Save the order to the database
        $order->save();

        // Loop through cart items and add them to the order
        foreach ($cartItems as $cartItem) {
            $order->products()->attach($cartItem['product_id'], [
                'quantity' => $cartItem['quantity'],
                // Other pivot table data, if needed
            ]);
        }

        // Clear the user's cart (assuming you have a method for this)
        auth()->user()->cart()->detach();

        // Add a success message for the "place order" operation
        Log::info('Order placed successfully for user ' . auth()->user()->id);

        // Respond with a success message or appropriate JSON response
        return response()->json(['message' => 'Order placed successfully.']);
    } catch (\Exception $e) {
        // Handle exceptions and errors

        // Add an error message for the "place order" operation
        Log::error('Error placing the order for user ' . auth()->user()->id . ': ' . $e->getMessage());

        // Return an error response or handle the error as needed
        return response()->json(['message' => 'Error placing the order.']);
    }
}
}
