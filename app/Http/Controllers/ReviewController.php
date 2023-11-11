<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    
public function submitReview(Request $request)
    {
        $validatedData = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:255',
        ]);

        // Assuming you have an authenticated user
        $user_id = auth()->id();

        // Create a new review
        Review::create([
            'user_id' => $user_id,
            'store_id' => $request->input('store_id'), // You may need to pass the store_id from the front end
            'rating' => $validatedData['rating'],
            'review' => $validatedData['review'],
        ]);

        return response()->json(['message' => 'Review submitted successfully']);
    }
    
}
