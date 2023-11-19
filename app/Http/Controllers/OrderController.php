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
    // Retrieve the user's email and cart items
    $userEmail = $this->getUserEmail();
    $user = auth()->user();
    $cartItems = $user->cart;

    try {
        // Start a database transaction for atomicity
        DB::beginTransaction();

        // Build an array of order details from cart items before detaching
        $orderDetails = [];
        foreach ($cartItems as $cartItem) {
            $product = $cartItem->pivot->product;
            $quantity = $cartItem->pivot->quantity;
            $totalPrice = $product->price * $quantity;

            // Create individual orders
            $order = new Order();
            $order->user_id = $user->id;
            $order->product_id = $product->id;
            $order->quantity = $quantity;
            $order->save();

            // Add order details to the array
            $orderDetails[] = [
                'product_name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'total_price' => $totalPrice,
            ];
        }

        // Send email with order details
        $this->sendOrderEmail($userEmail, $orderDetails);

        // Detach cart items from the user
        $user->cart()->detach($cartItems);

        // Commit the database transaction
        DB::commit();

        // Retrieve the user's email directly
        $userEmail = $user->email;

        // Return view with user information and cart details
        return view('checkout', [
            'userEmail' => $userEmail,
            'cart' => $cartItems,
        ]);
    } catch (\Exception $e) {
        // Roll back the database transaction in case of an error
        DB::rollBack();

        // Log the error
        Log::error('Error creating orders from cart for user ' . $user->id . ': ' . $e->getMessage());

        // Return JSON response with an error message
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
            // Send email with the OrderPlaced Mailable
            Mail::to($userEmail)->send(new OrderPlaced($userEmail, $orderDetails));

            // Log success or any additional information
            Log::info('Order email sent to ' . $userEmail);

            return true; // or any success indication
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error sending order email to ' . $userEmail . ': ' . $e->getMessage());

            return false; // or handle the error accordingly
        }
    }

}
