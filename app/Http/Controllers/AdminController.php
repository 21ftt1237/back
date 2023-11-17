<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where('role_id', 1)->get(); 
        return view('Dashboard-adm', compact('admins'));
    }

    public function ChangeStatuss(Request $request)
    {
        // Your logic for changing status
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        $defaultRoleId = 1; 
        $admin = User::create($validatedData + ['role_id' => $defaultRoleId]);

        return redirect()->route('dashboard.admin')->with('success', 'Admin added successfully');
    }
}

