<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    
public function store(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'review' => 'required|string',
                'rating' => 'required|integer',
            ]);

            // Get the currently logged user's ID
            $userId = auth()->id();
            
            //Get store id
            $store_id = $request->input('store_id');

            // Create a new review record
            $review = Review::create([
                'user_id' => $userId,
                'review' => $request->input('review'),
                'rating' => $request->input('rating'),
                'store_id' => $store_id,
            ]);

            // Log success
            Log::info('Review submitted successfully.', [
                'user_id' => $userId,
                'review_id' => $review->id,
            ]);

            // Redirect or return a response as needed
            return redirect()->back()->with('success', 'Review submitted successfully!');
        } catch (\Exception $e) {
            // Log error
            Log::error('Error submitting review.', [
                'user_id' => $userId ?? null,
                'error' => $e->getMessage(),
            ]);

            // Redirect or return a response for error handling
            return redirect()->back()->with('error', 'An error occurred while submitting the review.');
        }
    }

    public function getReviews()
    {
       $reviews = Review::with('user') 
            ->latest() 
            ->get();
        return response()->json(['reviews' => $reviews]);
    }
    
}
