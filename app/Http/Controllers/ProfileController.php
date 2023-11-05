<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function showCoupon()
{
   
    if (Auth::check()) {
      
        $user = Auth::user();

       
        $loyaltyPoints = $user->coupon_point;

       
        $redeemCoupon = $user->redeem_coupon;

        
        return view('profilev', ['loyaltyPoints' => $loyaltyPoints, 'redeemCoupon' => $redeemCoupon]);
    }

    
    return redirect('/login');
}

public function redeemCoupon(Request $request)
{
    
    $user = Auth::user();

   
    if (!$user) {
        return redirect()->back()->with('error', 'User not authenticated.');
    }

   
    $couponAmount = $request->input('coupon_amount');

    if (!is_numeric($couponAmount) || $couponAmount <= 0) {
        return redirect()->back()->with('error', 'Invalid coupon amount.');
    }

    
    if ($user->redeem_coupon !== null && $user->redeem_coupon > 0) {
        return redirect()->back()->with('message', 'You have already redeemed a coupon.');
    }

    
    if ($user->coupon_point >= $couponAmount) {
        // Deduct loyalty points
        $user->coupon_point -= $couponAmount;

        
        $couponAmount /= 100;

        
        $user->redeem_coupon = $couponAmount;
        $user->save();

        return redirect()->back()->with('message', 'Coupon redeemed successfully.');
    } else {
        return redirect()->back()->with('message', 'Insufficient loyalty points to redeem this coupon.');
    }
}


    
public function profupdate(Request $request)
{
    $userId = $request->input('id');

   
    $user = DB::table('users')->where('id', $userId)->first();

    $updateData = [
        'name' => $request->input('name'),
        'mobile_number' => $request->input('phone_number'),
        'address' => $request->input('Address'),
        'postcode' => $request->input('postcode'),
        'country' => $request->input('country'),
        'district' => $request->input('district'),
    ];

    DB::table('users')->where('id', $userId)->update($updateData);

    return redirect()->route('profilev')->with('message', 'Profile updated successfully');
}

    public function showLoyal()
{
   
    if (Auth::check()) {
      
        $user = Auth::user();

      
        $loyaltyPoints = $user->coupon_point;

      
        $redeemCoupon = $user->redeem_coupon;

         
        return view('coupon', ['loyaltyPoints' => $loyaltyPoints, 'redeemCoupon' => $redeemCoupon]);
    }

   
    return redirect('/login');
}
public function calculateLoyaltyPoints(Request $request) {
  
    $request->validate([
        'totalPrice' => 'required|numeric',
    ]);

    
    $totalPrice = $request->input('totalPrice');

    
    $loyaltyPoints = $this->calculateLoyaltyPointsForPrice($totalPrice);

   
    $user = Auth::user();

    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }

   
    DB::transaction(function () use ($user, $loyaltyPoints) {
       
        $user->coupon_points += $loyaltyPoints;

        
        $user->save();

        return response()->json(['message' => 'Loyalty points added successfully']);
    });

    return response()->json(['message' => 'Error adding loyalty points'], 500);
}

public function updateLoyaltyPoints(Request $request)
{
    $userId = auth()->user()->id; // Get the currently logged-in user's ID
    $loyaltyPoints = $request->input('loyaltyPoints'); // Get the loyalty points value from the request

   
    User::where('id', $userId)->update(['coupon_point' => $loyaltyPoints]);

    return response()->json(['message' => 'Coupon points updated successfully']);
}
    
}
    

