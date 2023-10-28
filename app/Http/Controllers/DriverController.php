<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use Auth;

class DriverController extends Controller
{
    /**
     * Show the driver registration form.
     */
    public function showRegistrationForm()
    {
        return view('driverRegis');
    }

    /**
     * Register a new driver.
     */
    public function register(Request $request)
    {
        // Validation rules for registration form fields
        $rules = [
            'name' => 'required|string|max:255',
            'driver_email' => 'required|email|unique:drivers',
            'driver_password' => 'required|min:6|confirmed',
        ];

        $request->validate($rules);

        // Create a new driver record
        $driver = new Driver();
        $driver->name = $request->input('name');
        $driver->driver_email = $request->input('driver_email');
        $driver->driver_password = bcrypt($request->input('driver_password'));
        $driver->save();

        // Log in the newly registered driver
        Auth::guard('driv')->login($driver);

        return redirect('driverdash'); // Redirect to the driver's dashboard or another appropriate location
    }

    /**
     * Show the driver login form.
     */
    public function showLoginForm()
    {
        return view('driver-login');
    }

    /**
     * Handle driver login.
     */
    public function login(Request $request)
    {
       $credentials = $request->only('driver_email', 'password');

if (Auth::guard('driv')->attempt($credentials)) {
    return redirect('/driverdash'); // Redirect to the driver's dashboard
}


        // Authentication failed, redirect back with errors
        return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
    }

    /**
     * Log the driver out.
     */
    public function logout()
    {
        Auth::guard('driv')->logout();
        return redirect('/'); // Redirect to the home page or another appropriate location
    }
}
