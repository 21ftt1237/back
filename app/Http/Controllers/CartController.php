<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

public function saveCartItems(Request $request)
{
    \Log::info($request->all());

    // Validate the incoming request data
    $request->validate([
        'cartItems' => 'required|array',
        'cartItems.*.name' => 'required|string',
        'cartItems.*.image' => 'required|string', // Add 'image' validation
        'cartItems.*.price' => 'required|numeric',
        'cartItems.*.desc' => 'required|string', // Add 'desc' validation
        'cartItems.*.quantity' => 'required|integer|min:1',
        // Add other validation rules as needed
    ]);

    $cartItemsData = $request->input('cartItems');
    $user = Auth::user(); // Get the authenticated user

    // Initialize an array to store the selected fields
    $selectedItems = [];

    // Iterate through the cart items and save them to the database with the associated user ID
    foreach ($cartItemsData as $itemData) {
        $cartItem = new CartItem([
            'user_id' => $user->id, // Set the user_id
            'name' => $itemData['name'],
            'image' => $itemData['image'],
            'price' => $itemData['price'],
            'desc' => $itemData['desc'],
            'quantity' => $itemData['quantity'],
            // Add other fields as needed
        ]);
        $cartItem->save();

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
