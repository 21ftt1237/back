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


    public function handleForm(Request $request, $action)
{
    
    if ($action == 'store') {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        $defaultRoleId = 1; 
        $admin = User::create($validatedData + ['role_id' => $defaultRoleId]);

        return redirect()->route('dashboard.admin')->with('success', 'Admin added successfully');
    
    } elseif ($action == 'delete') {
       $request->validate([
            'userId' => 'required|exists:users,id',
        ]);

        $userId = $request->input('userId');
        $user = User::find($userId);

        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User deleted successfully');
        }

        return redirect()->back()->with('error', 'User not found');
    }
    

    // Redirect back to the Dashboard-adm view or wherever is appropriate
    return redirect()->route('dashboard.admin')->with('success', 'Form submitted successfully');
}
}

