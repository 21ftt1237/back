<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
     public function index()
    
    {
       
        $admins = Admin::with('role_id')->get();

      
        return view('Dashboard-adm', compact('admins'));
    }

    public function ChangeStatuss (Request $request){


}

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins',
            'password' => 'required|string|min:8',
        ]);

        // Create a new admin
        $admin = new Admin;
        $admin->name = $validatedData['name'];
        $admin->email = $validatedData['email'];
        $admin->password = bcrypt($validatedData['password']);
        $admin->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Admin added successfully');
    }

}
