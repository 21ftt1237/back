<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function getUsers()
    {
        // Fetch data from the 'users' table
        $users = User::select('id', 'name', 'email', 'password', 'role_id')->get();

        // Convert data to JSON for JavaScript
        return response()->json($users);
    }
}
}
