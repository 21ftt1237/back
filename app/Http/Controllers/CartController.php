<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartItem; // Replace with your actual CartItem model

class CartController extends Controller
{
    public function saveCartItems(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'cartItems' => 'required|array',
            'cartItems.*.name' => 'required|string',
            'cartItems.*.price' => 'required|numeric',
            'cartItems.*.quantity' => 'required|integer|min:1',
            // Add other validation rules as needed
        ]);

        $cartItemsData = $request->input('cartItems');

        // Iterate through the cart items and save them to the database
        foreach ($cartItemsData as $itemData) {
            CartItem::create([
                'name' => $itemData['name'],
                'price' => $itemData['price'],
                'quantity' => $itemData['quantity'],
                // Add other fields as needed
            ]);
        }

        // You can return a response if needed
        return response()->json(['message' => 'Cart items saved successfully'], 200);
    }
}
