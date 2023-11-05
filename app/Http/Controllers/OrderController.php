<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\OrderList;
use App\Models\Product;
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

    // Retrieve all cart items for the user
    $cartItems = $user->cart;

    try {
        // Start a database transaction for atomicity
        DB::beginTransaction();

        foreach ($cartItems as $cartItem) {
            // Access the pivot values directly
            $product_id = $cartItem->pivot->product_id;
            $quantity = $cartItem->pivot->quantity;

            // Calculate the total price based on the product price and quantity
            $product = Product::find($product_id); // Assuming you have a "Product" model
            $totalPrice = $product->price * $quantity;

            // Create a new order using the pivot values
            $order = new Order();
            $order->user_id = $user->id;
            $order->product_id = $product_id;
            $order->quantity = $quantity;

            // Debugging: Print order data before saving
            Log::info('Order Data Before Saving: ' . json_encode($order->toArray()));

            // Save the order to the 'orders' table
            $order->save();

            // Insert the calculated total price into the "orders_list" table using Eloquent relationships
            $orderList = new OrderList();
            $orderList->user_id = $user->id;
            $orderList->Total_price = $totalPrice;
            $orderList->created_at = $order->created_at;
            Log::info('OrderList Data Before Saving: ' . json_encode($orderList->toArray()));

            
            $order->orderLists()->save($orderList);

        }

        // Delete the cart items that were transferred to orders
        $user->cart()->detach($cartItems);

        // Commit the database transaction
        DB::commit();

        // Log success message
        Log::info('Orders created from cart for user ' . $user->id);

        // Respond with a success message
        return response()->json(['message' => 'Orders created successfully.']);
    } catch (\Exception $e) {
        // Roll back the database transaction on error
        DB::rollBack();

        // Handle exceptions and errors

        // Log an error message
        Log::error('Error creating orders from cart for user ' . $user->id . ': ' . $e->getMessage());

        // Respond with an error message
        return response()->json(['message' => 'Error creating orders.']);
    }
}



    
}
