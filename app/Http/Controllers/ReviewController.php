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
        'store_id' => 'required|exists:stores,id',
        'review' => 'required|string|max:255',
        'rating' => 'required|integer',
    ]);

    // Get the currently authenticated user
    $user = auth()->user();

    // Insert the review into the database with the authenticated user ID
    $review = Review::create([
        'user_id' => $user->id,
        'store_id' => $request->input('store_id'),
        'review' => $request->input('review'),
        'rating' => $request->input('rating'),
    ]);

    return response()->json($review, 201); // Return the inserted review data
}
}
