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

    public function showProfile()
{
    // Ensure the user is authenticated
    if (Auth::check()) {
        // Fetch the logged-in user
        $user = Auth::user();

        // Get the loyalty points from the user model
        $loyaltyPoints = $user->coupon_point;

        // Get the redeem_coupon value
        $redeemCoupon = $user->redeem_coupon;

         // Pass the loyalty points and redeem_coupon to the view
        return view('profilev', ['loyaltyPoints' => $loyaltyPoints, 'redeemCoupon' => $redeemCoupon]);
    }

    // Handle the case when the user is not authenticated
    return redirect('/login');
}

public function redeemCoupon(Request $request)
{
    $user = Auth::user();
    $couponAmount = $request->input('coupon_amount');
    
    if ($user->redeem_coupon === null || empty($user->redeem_coupon)) {
        // Check if the redeem_coupon column is empty
        if ($user->coupon_point >= $couponAmount) {
            // Deduct loyalty points
            $user->coupon_point -= $couponAmount;

            // Divide coupon amount by 100
            $couponAmount /= 100;

            // Store coupon amount
            $user->redeem_coupon = $couponAmount;
            $user->save();
            return redirect()->back()->with('message', 'Coupon redeemed successfully.');
        } else {
            return redirect()->back()->with('message', 'Insufficient loyalty points to redeem this coupon.');
        }
    } else {
        return redirect()->back()->with('message', 'You have already redeemed a coupon.');
    }
}

    // method to update profile
public function profupdate(Request $request)
{
    $userId = $request->input('id');

    // Use a database query to find the user by their ID
    $user = DB::table('users')->where('id', $userId)->first();

    if (!$user) {
        // Handle the case where the user is not found.
        // You can redirect back with an error message.
    }

    // Update user's information
    $updateData = [
        'name' => $request->input('name'),
        'mobile_number' => $request->input('phone_number'),
        'address' => $request->input('Address'),
        'postcode' => $request->input('postcode'),
        'country' => $request->input('country'),
        'district' => $request->input('district'),
    ];

    // Use a database query to update the user's record
    DB::table('users')->where('id', $userId)->update($updateData);

    return redirect()->route('profilev')->with('message', 'Profile updated successfully');
}

    public function showLoyal()
{
    // Ensure the user is authenticated
    if (Auth::check()) {
        // Fetch the logged-in user
        $user = Auth::user();

        // Get the loyalty points from the user model
        $loyaltyPoints = $user->coupon_point;

        // Get the redeem_coupon value
        $redeemCoupon = $user->redeem_coupon;

         // Pass the loyalty points and redeem_coupon to the view
        return view('coupon', ['loyaltyPoints' => $loyaltyPoints, 'redeemCoupon' => $redeemCoupon]);
    }

    // Handle the case when the user is not authenticated
    return redirect('/login');
}

}
    

