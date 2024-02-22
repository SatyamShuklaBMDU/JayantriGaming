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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cin_no')->nullable();
            $table->string('name');
            $table->string('phone_no');
            $table->string('profile_image')->nullable();
            $table->string('email_id')->unique();
            $table->string('password');
            $table->enum('status', ['active', 'block', 'pending'])->default('active');
            $table->text('payment_history')->nullable();
            $table->text('withdraw_history')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
