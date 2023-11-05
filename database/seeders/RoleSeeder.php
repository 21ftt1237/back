<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Role::create([
            'name' => 'admin',
            // Add other role attributes as needed for the admin role
        ]);

        \App\Models\Role::create([
            'name' => 'store owner',
            // Add other role attributes as needed for the store owner role
        ]);

        \App\Models\Role::create([
            'name' => 'customer',
            // Add other role attributes as needed for the customer role
        ]);
    }
}
?>
