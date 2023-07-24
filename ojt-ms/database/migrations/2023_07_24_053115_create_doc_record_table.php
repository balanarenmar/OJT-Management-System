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
        Schema::create('doc_record', function (Blueprint $table) {
            $table->id();

            $table->string('student_id');
            $table->foreign('student_id')
                     ->references('account_id')->on('students')
                     ->onDelete('cascade'); // set cascade deletion

            $table->foreignId('document_id')
                     ->nullable()
                     ->constrained('documents')
                     ->onDelete('cascade'); // set cascade deletion

            $table->string('document_name', 255);      
            $table->string('file_path', 255)->nullable()->default(null);
            
            $table->boolean('is_submitted')->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_record');
    }
};
