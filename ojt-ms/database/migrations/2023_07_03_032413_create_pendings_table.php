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
        Schema::create('pendings', function (Blueprint $table) {
            $table->id();
            $table->string('account_id', 32);
            $table->string('first_name', 32);
            $table->string('middle_initial', 1)->nullable();
            $table->string('last_name', 32);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact', 11);
            $table->enum('course', ['BS Information Technology', 'BS Computer Science', 'BS Meteorology', 'BS Biology', 'BS Chemistry']);
            $table->enum('block', ['A', 'B', 'C', 'D']);
            $table->enum('gender', ['Male', 'Female']);
            $table->integer('year_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendings');
    }
};
