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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->decimal('coupon_point')->default(0);
            $table->decimal('redeem_coupon')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('country')->nullable();
            $table->string('district')->nullable();
 	    $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('table_roles');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
}
