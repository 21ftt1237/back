<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    
public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'review' => 'required|string',
            'rating' => 'required|integer',
        ]);

        // Get the currently logged user's ID
        $userId = auth()->id();

        // Create a new review record
        $review = Review::create([
            'user_id' => $userId,
            'review' => $request->input('review'),
            'rating' => $request->input('rating'),
            // Add store_id if you have a way to associate the review with a store
        ]);

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
    
}
