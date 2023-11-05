<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
     public function index()
    
    {
        // Retrieve admins with their roles
        $admins = Admin::with('role')->get();

        // You can return a view and pass the $admins data to display it
        return view('admin.adminDashboard', compact('admins'));
    }

    public function ChangeStatuss (Request $request){


}

}
