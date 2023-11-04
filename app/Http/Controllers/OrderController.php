<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Order;
use App\Models\User;

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

    // Retrieve the user's cart items and their product IDs
    $cartItems = $user->cart;
    $productIds = $cartItems->pluck('product_id');

    // Create a new order for the user
    $order = new Order();
    $order->user_id = $user->id;
    // Set other order-related data
    $order->save();

    try {
        // Transfer product IDs from the cart to the order
        foreach ($productIds as $productId) {
            $order->products()->attach($productId, [
                'quantity' => 1,  // Assuming a quantity of 1 per product
                // Other pivot table data, if needed
            ]);
        }

        // Clear the user's cart
        $user->cart()->detach();

        // Log success message
        Log::info('Order placed successfully for user ' . $user->id);

        // Respond with a success message
        return response()->json(['message' => 'Order placed successfully.']);
    } catch (\Exception $e) {
        // Handle exceptions and errors

        // Log an error message
        Log::error('Error placing the order for user ' . $user->id . ': ' . $e->getMessage());

        // Respond with an error message
        return response()->json(['message' => 'Error placing the order.']);
    }
}
}
