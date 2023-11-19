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
use App\Mail\OrderStatusUpdated;
use App\Mail\OrderPlaced;
use Illuminate\Support\Facades\Mail;




class OrderController extends Controller
{
    public function updateCouponPoint(Request $request)
    {
        Log::info('Received coupon_point: ' . $request->coupon_point);

        $request->validate([
            'coupon_point' => 'required|numeric', 
        ]);

        
        $user = Auth::user();
        $userEmail = $user->email;

        $couponPoint = floatval($request->coupon_point);
        Log::info('Coupon Points: ' . $couponPoint);
        $user->coupon_point += $couponPoint;
        $user->save();

        return response()->json(['message' => 'Coupon points updated successfully']);
    }

public function getUserEmail()
    {
        $user = auth()->user();
        return $user->email;
    }


public function placeOrder(Request $request)
{

     $userEmail = $this->getUserEmail();
    
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

        // Retrieve the user's email directly
        $userEmail = $user->email;

        // Send email
        $this->sendOrderEmail($userEmail, $consolidatedOrders);

        // Render the 'checkout' view and pass the user email
        return view('checkout', compact('userEmail'));
        
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
    
public function showOrderDetails($created_at)   {
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

    public function updateStatus(Request $request)
    {
        \Log::info('rowId: ' . $request->input('rowId'));
        \Log::info('editedStatus: ' . $request->input('editedStatus'));

        try {
            $orderId = $request->input('rowId');
            $newStatus = $request->input('editedStatus');

            $order = OrderList::find($orderId);

            if ($order) {
                // Update the status and save the order
                $order->status = $newStatus;
                $order->save();

                \Log::info('Order status updated successfully.');

                // Fetch the user's email based on the order
                $user = User::find($order->user_id);

                // Send the email with the correct variable ($orderId)
                Mail::to($user->email)->send(new OrderStatusUpdated($orderId));

                \Log::info('Email sent to user: ' . $user->email);

                return response()->json(['success' => true]);
            } else {
                \Log::error('Order not found for ID: ' . $orderId);
                return response()->json(['error' => 'Order not found'], 404);
            }
        } catch (\Exception $e) {
            \Log::error('Error updating order status: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

public function sendOrderEmail($userEmail, $orderDetails)
{
    try {
        // Send email
        Mail::to($userEmail)->send(new OrderPlaced($userEmail, $orderDetails));

        // Log success or handle as needed
        Log::info('Order email sent successfully.');
    } catch (\Exception $e) {
        // Log error or handle as needed
        Log::error('Error sending order email: ' . $e->getMessage());
    }
}

}
