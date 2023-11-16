<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderList;
use App\Models\Product;
use Illuminate\Support\Facades\dd;



class OrderController extends Controller
{
    public function updateCouponPoint(Request $request)
    {
        Log::info('Received coupon_point: ' . $request->coupon_point);

        $request->validate([
            'coupon_point' => 'required|numeric', 
        ]);

        
        $user = Auth::user();

        $couponPoint = floatval($request->coupon_point);
        Log::info('Coupon Points: ' . $couponPoint);
        $user->coupon_point += $couponPoint;
        $user->save();

        return response()->json(['message' => 'Coupon points updated successfully']);
    }



public function placeOrder(Request $request)
{
   
    $user = auth()->user();

  
    $cartItems = $user->cart;

    try {
        // Start a database transaction for atomicity
        DB::beginTransaction();

        
        $consolidatedOrders = [];

        foreach ($cartItems as $cartItem) {
            $product_id = $cartItem->pivot->product_id;
            $quantity = $cartItem->pivot->quantity;
            $product = Product::find($product_id); 
            $totalPrice = $product->price * $quantity;

            
            $order = new Order();
            $order->user_id = $user->id;
            $order->product_id = $product_id;
            $order->quantity = $quantity;

            
            Log::info('Order Data Before Saving: ' . json_encode($order->toArray()));

           
            $order->save();

           
            $createdAtKey = $order->created_at->format('Y-m-d H:i:s');
            $consolidatedOrders[$createdAtKey][] = [
            'user_id' => $user->id,
            'Total_price' => $totalPrice,
            'created_at' => $createdAtKey,
             ];
        }

        
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

       
        $user->cart()->detach($cartItems);

        
        DB::commit();

        
        Log::info('Orders created from cart for user ' . $user->id);

      
        return response()->json(['message' => 'Orders created successfully.']);
    } catch (\Exception $e) {
      
        DB::rollBack();

       
        Log::error('Error creating orders from cart for user ' . $user->id . ': ' . $e->getMessage());

        
        return response()->json(['message' => 'Error creating orders.']);
    }
}
    
public function showOrderList()
{
   
    $user = Auth::user();

    
    $orderLists = OrderList::where('user_id', $user->id)->get();
   
    $orderStatus = session('order_status', 'unknown');

  return view('My order.order', ['orderLists' => $orderLists,'orderStatus' => $orderStatus]);
}
    
public function showOrderDetails($created_at)
{
    
    $user = Auth::user();
    $orderDetails = Order::where('user_id', $user->id)
                         ->where('created_at', $created_at)
                         ->with('product')
                         ->get();

    
    $orderList = OrderList::where('user_id', $user->id)
                          ->where('created_at', $created_at)
                          ->first();

  
    if ($orderList) {
        $orderStatus = $orderList->status;
    } else {
       
        $orderStatus = "Status not available"; 
    }

    // Pass the $orderStatus variable to the view
    return view('My order.order_details', [
        'orderDetails' => $orderDetails,
        'orderStatus' => $orderStatus,
    ]);
}

public function showAllOrderLists()
{
    $orderLists = OrderList::join('users', 'orders_list.user_id', '=', 'users.id')
        ->select('orders_list.*', 'users.name as user_name')
        ->get();
    
    return view('AdminOrder', ['orderLists' => $orderLists]);
}

public function updateOrderStatus($orderId, Request $request)
    {
        $request->validate([
            'status' => 'required|in:Processing,Picked Up,Delivered,Completed,Cancelled',
        ]);

        try {
            $orderList = OrderList::findOrFail($orderId);
            $orderList->update(['status' => $request->status]);

            return response()->json(['message' => 'Order status updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error updating order status'], 500);
        }
    }

    
}
