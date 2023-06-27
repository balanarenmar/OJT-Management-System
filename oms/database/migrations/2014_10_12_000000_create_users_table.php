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
            $table->string('account_id', 32)->unique()->primary(); //added 'account_id' as a unique primary key
            $table->string('first_name', 32);           //added
            $table->string('middle_initial', 1)->nullable(); //added
            $table->string('last_name', 32);            //added
            $table->string('email')->unique();          //added
            $table->string('password');
            $table->enum('account_type', ['admin', 'student'])->default('student');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
