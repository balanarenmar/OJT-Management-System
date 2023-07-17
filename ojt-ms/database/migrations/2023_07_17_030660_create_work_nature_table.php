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
        Schema::create('work_nature', function (Blueprint $table) {
            $table->id();
            $table->string('account_id');       //Foreign Key
            $table->foreign('account_id')
                    ->references('account_id')->on('students')
                    ->onDelete('cascade'); // set cascade deletion
            $table->string('work_nature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_nature');
    }
};
