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
     Schema::create('orders_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orders_id');
            $table->string('status');
            $table->foreign('orders_id')->references('id')->on('orders');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
