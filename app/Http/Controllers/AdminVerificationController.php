<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class AdminVerificationController extends Controller
{
    use VerifiesEmails;

    protected $redirectTo;

    public function __construct()
    {
        $this->middleware('auth');
        $this->redirectTo = RouteServiceProvider::HOME;
    }

    public function showVerificationForm(Request $request)
    {
        $role = $request->user()->role_id;

        if ($role === 3) {
            // User role
            return $request->user()->hasVerifiedEmail()
                ? redirect($this->redirectPath())
                : view('dashboard.user');
        } elseif ($role === 1) {
            // Admin role
            return $request->user()->hasVerifiedEmail()
                ? redirect(route('dashboard.admin'))
                : view('auth.admin-verify');
        } else {
            // Handle other roles if needed
            abort(403, 'Unauthorized');
        }
    }

    public function verify(Request $request)
    {
        // ... (unchanged)

        if ($role === 3) {
            // User role
            return redirect($this->redirectPath())->with('verified', true);
        } elseif ($role === 1) {
            // Admin role
            return redirect(route('dashboard.admin'))->with('verified', true);
        } else {
            // Handle other roles if needed
            abort(403, 'Unauthorized');
        }
    }
}
