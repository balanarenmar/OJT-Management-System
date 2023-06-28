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
        Schema::create('students', function (Blueprint $table) {

            $table->string('account_id')->primary();       //Primary and Foreign Key
            $table->foreign('account_id')
                    ->references('account_id')->on('users')
                    ->onDelete('cascade'); // set cascade deletion

            $table->enum('course', ['BS Information Technology', 'BS Computer Science', 'BS Meteorology', 'BS Biology', 'BS Chemistry']);
            $table->enum('block', ['A', 'B', 'C', 'D']);
            $table->enum('gender', ['Male', 'Female']);

            $table->enum('status', ['deployed', 'undeployed', 'finished'])->default('undeployed');
            $table->date('date_started')->nullable();
            $table->date('date_completed')->nullable();
            $table->integer('hrs_rendered');
            $table->integer('hrs_remaining');

            //$table->string('company_id')->nullable();   //Foreign Key to Company Entity
            /* $table->foreign('company_id')
                    ->references('company_id')->on('companies')
                    ->onDelete('cascade'); // set cascade deletion
            $table->timestamps(); */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
