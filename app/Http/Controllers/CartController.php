<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartItem; // Replace with your actual CartItem model

class CartController extends Controller
{
    public function saveCartItems(Request $request)
    {
        \Log::info($request->all());

        // Validate the incoming request data
        $request->validate([
            'cartItems' => 'required|array',
            'cartItems.*.name' => 'required|string',
            'cartItems.*.price' => 'required|numeric',
            'cartItems.*.quantity' => 'required|integer|min:1',
            // Add other validation rules as needed
        ]);

        $cartItemsData = $request->input('cartItems');

        // Initialize an array to store the selected fields
        $selectedItems = [];

        // Iterate through the cart items and save them to the database
        foreach ($cartItemsData as $itemData) {
            CartItem::create([
                'name' => $itemData['name'],
                'image' => $itemData['image'], // Add 'image' field
                'price' => $itemData['price'],
                'desc' => $itemData['desc'], // Add 'desc' field
                'quantity' => $itemData['quantity'],
                // Add other fields as needed
            ]);

            // Select the desired fields and add them to the $selectedItems array
            $selectedItems[] = [
                'name' => $itemData['name'],
                'image' => $itemData['image'],
                'price' => $itemData['price'],
                'desc' => $itemData['desc'],
                'quantity' => $itemData['quantity'],
            ];
        }

        // You can return the selected items as a JSON response if needed
        return response()->json(['cartItems' => $selectedItems], 200);
    }
}
