<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming your user model is in the App\Models namespace

class AdminDashboardController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'role_id')->paginate(10);

        return view('Dashboard-adm', ['users' => $users]);
    }
}

