<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    
 public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'review' => 'required|string|max:255',
        'rating' => 'required|integer',
    ]);

    // Get the currently authenticated user
    $user = auth()->user();

    // Find the store by store number
    $store = Store::where('store_number', $storeNumber)->first();

    // Check if the store exists
    if (!$store) {
        return response()->json(['error' => 'Store not found.'], 404);
    }

    // Insert the review into the database with the authenticated user ID and store ID
    $review = Review::create([
        'user_id' => $user->id,
        'store_id' => $store->id,
        'review' => $request->input('review'),
        'rating' => $request->input('rating'),
    ]);

    return response()->json($review, 201); // Return the inserted review data
}
    
}
