<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    
    {
        // Retrieve admins with their roles
        $admins = Admin::with('role')->get();

        // You can return a view and pass the $admins data to display it
        return view('admins.index', compact('admins'));
    }

    public function ChangeStatuss (Request $request){


}

}
