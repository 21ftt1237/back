<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where('role_id', 1)->get(); 
        $products = Product::all();
        return view('Dashboard-adm', compact('admins', 'products'));
    }

    public function createProduct(Request $request)
    {
        // Validate product creation form
        $validatedData = $request->validate([
            'store_id' => 'required|exists:stores,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image_link' => 'nullable|string',
        ]);

        // Create the product
        Product::create($validatedData);

        return redirect()->route('dashboard.admin')->with('success', 'Product added successfully');
    }

    public function editProduct(Request $request, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // Validate product update form
        $validatedData = $request->validate([
            'store_id' => 'required|exists:stores,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image_link' => 'nullable|string',
        ]);

        // Update the product
        $product->update($validatedData);

        return redirect()->route('dashboard.admin')->with('success', 'Product updated successfully');
    }

    public function deleteProduct($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // Delete the product
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');
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

