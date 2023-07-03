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
            $table->id('company_id');
            
            $table->enum('company_type', ['university', 'outside'])->default('university');
            $table->string('company_name', 32);
            $table->string('company_address', 32);
            $table->string('company_contact', 32);

            $table->string('ojt_supervisor', 64);
            $table->string('department', 32)->nullable();
            $table->integer('deployed_count')->default(0);

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
