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

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins|max:255',
            'password' => 'required|string|min:8',
        ]);   

        $defaultRoleId = 1;
        $admin = Admin::create($validatedData + ['role_id' => $defaultRoleId]);
        return redirect()->route('dashboard.admin')->with('success', 'Admin added successfully');
    }

}
