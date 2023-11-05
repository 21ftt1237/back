<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
     public function index()
    
    {
       
        $admins = Admin::with('role')->get();

      
        return view('admin.adminDashboard', compact('admins'));
    }

    public function ChangeStatuss (Request $request){


}

}
