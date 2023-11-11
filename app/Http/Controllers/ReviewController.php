<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Auth;

class ReviewController extends Controller
{
    
public function store(Request $request)
    {
        $request->validate([
            'stars' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
        ]);

        // Store the review associated with the currently logged-in user
        $user = Auth::user();
        $review = new Review;
        $review->stars = $request->input('stars');
        $review->review = $request->input('review');
        $user->reviews()->save($review);

        return response()->json(['message' => 'Review submitted successfully']);
    }
    
}
