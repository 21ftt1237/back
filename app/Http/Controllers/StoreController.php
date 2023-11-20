<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // Show a list of stores
    public function index()
    {
        $stores = Store::all();
        return view('stores.index', compact('stores'));
    }

    // Show a specific store
    public function show($storeId)
    {
        $store = Store::find($storeId);

        if (!$store) {
            abort(404, 'Store not found');
        }

        return view('stores.show', compact('store'));
    }

    // Create a new store form
    public function create()
    {
        return view('stores.create');
    }

    // Store creation handling
    public function store(Request $request)
    {
        // Validation and store creation logic
    }

    // Edit a store form
    public function edit($storeId)
    {
        $store = Store::find($storeId);

        if (!$store) {
            abort(404, 'Store not found');
        }

        return view('stores.edit', compact('store'));
    }

    // Update store handling
    public function update(Request $request, $storeId)
    {
        // Validation and store update logic
    }

    // Delete store handling
    public function destroy($storeId)
    {
        // Store deletion logic
    }
}

