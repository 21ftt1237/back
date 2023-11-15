<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        // Fetch data from the 'users' table
        $users = User::select('id', 'name', 'email', 'role_id')->get();

        // Convert data to JSON for JavaScript
        return response()->json($users);
    }

    public function show($id)
    {
        // Fetch a specific user
        $user = User::findOrFail($id);


        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($id),
            ],
            'role_id' => 'required|integer',
        ]);

        // Fetch the user
        $user = User::findOrFail($id);


        // Update user details
        $user->update($request->all());

        return response()->json($user);
    }

    public function destroy($id)
    {
        // Fetch the user
        $user = User::findOrFail($id);

    
        // Delete the user
        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }
}
