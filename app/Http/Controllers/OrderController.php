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

        // Create an array to consolidate orders by created_at timestamp
        $consolidatedOrders = [];

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

            // Create or update the order_list record
            $createdAtKey = $order->created_at->format('Y-m-d H:i:s');
            $consolidatedOrders[$createdAtKey][] = [
            'user_id' => $user->id,
            'Total_price' => $totalPrice,
            'created_at' => $createdAtKey,
             ];
        }

        // Process the consolidated orders
        foreach ($consolidatedOrders as $createdAt => $ordersData) {
            $existingOrderList = OrderList::where('user_id', $user->id)
                ->where('created_at', $createdAt)
                ->first();

            if ($existingOrderList) {
                // Update the existing order_list record
                $existingOrderList->Total_price += array_sum(array_column($ordersData, 'Total_price'));
                $existingOrderList->save();
            } else {
                // Create a new order_list record
                $orderList = new OrderList();
                $orderList->user_id = $user->id;
                $orderList->Total_price = array_sum(array_column($ordersData, 'Total_price'));
                $orderList->created_at = $createdAt;
                $orderList->save();
            }
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
    
public function showOrderList()
{
    // Retrieve the currently authenticated user
    $user = Auth::user();

    // Retrieve the user's order list(s)
    $orderLists = OrderList::where('user_id', $user->id)->get();
    //get the order status
    $orderStatus = session('order_status', 'unknown');

  return view('My order.order', ['orderLists' => $orderLists,'orderStatus' => $orderStatus]);
}
    
public function showOrderDetails($created_at)
{
    // Retrieve the order details based on the user_id and created_at
    $user = Auth::user();
    $orderDetails = Order::where('user_id', $user->id)
                         ->where('created_at', $created_at)
                         ->with('product')
                         ->get();

    // Pass the orderStatus variable to the view
    return view('My order.order_details', [
        'orderDetails' => $orderDetails,
        'orderStatus' => $orderStatus, 
    ]);
}



    
}
