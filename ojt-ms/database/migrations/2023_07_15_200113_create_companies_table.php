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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            
            $table->enum('comp_type', ['university', 'outside'])->default('university');
            $table->string('comp_name', 32);
            $table->string('comp_address_street')->nullable();
            $table->string('comp_address_city')->nullable();
            $table->string('comp_address_province')->nullable();
            $table->string('comp_contact', 32);

            $table->string('ojt_supervisor', 64);

            $table->integer('students_deployed_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
