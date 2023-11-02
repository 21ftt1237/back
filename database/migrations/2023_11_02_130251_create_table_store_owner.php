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
        Schema::create('table_store_owner', function (Blueprint $table) {
            $table->id();
	    $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('store_id');
            $table->timestamps();
        });


 	Schema::table('table_store_owner', function (Blueprint $table) {
            $table->foreign('store_id')->references('id')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
	Schema::table('table_store_owner', function (Blueprint $table) {
            $table->dropForeign(['store_id']);
        });
        Schema::dropIfExists('table_store_owner');
    }
};

