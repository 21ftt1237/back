<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_roles', function (Blueprint $table) {
            $table->id();
	    $table->string('name');
            $table->timestamps();
        });
 
        DB::table('table_roles')->insert([
            ['name' => 'admin'],           // ID: 1
            ['name' => 'store owner'],     // ID: 2
            ['name' => 'customer'],        // ID: 3
        ]);
   }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_roles');
    }
};
