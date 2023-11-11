<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    
 public function store(Request $request)
    {
        $user = Auth::user(); // Get the currently logged-in user

        // Assuming you have a variable $storeNumber available
        $storeNumber = $request->input('storeNumber');

        // Fetch store based on the store number
        $store = Store::where('store_number', $storeNumber)->first();

        // Check if the store exists
        if (!$store) {
            return response()->json(['error' => 'Store not found'], 404);
        }

        // Create a new review
        $review = new Review([
            'user_id' => $user->id,
            'store_id' => $store->id,
            'review' => $request->input('review'),
            'rating' => $request->input('rating'),
        ]);

        // Save the review
        $review->save();

        return response()->json(['success' => true]);
    }
    
}
