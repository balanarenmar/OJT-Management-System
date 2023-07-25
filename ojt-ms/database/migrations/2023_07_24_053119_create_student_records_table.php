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
        Schema::create('student_records', function (Blueprint $table) {
            $table->id();

            $table->string('student_id');
            $table->foreign('student_id')
                     ->references('account_id')->on('students')
                     ->onDelete('cascade'); // set cascade deletion

            // $table->foreignId('document_id')
            //          ->nullable()
            //          ->constrained('documents')
            //          ->onDelete('cascade'); // set cascade deletion

            $table->boolean('medcert_is_submitted')->default(false);
            $table->string('medcert_file_path', 255)->nullable()->default(null);

            $table->boolean('jurat_is_submitted')->default(false);
            $table->string('jurat_file_path', 255)->nullable()->default(null);

            $table->boolean('waver_is_submitted')->default(false);
            $table->string('waver_file_path', 255)->nullable()->default(null);

            $table->boolean('acceptance_is_submitted')->default(false);
            $table->string('acceptance_file_path', 255)->nullable()->default(null);

            $table->boolean('mentorship_is_submitted')->default(false);
            $table->string('mentorship_file_path', 255)->nullable()->default(null);

            $table->boolean('moa_is_submitted')->default(false);
            $table->string('moa_file_path', 255)->nullable()->default(null);

            $table->boolean('loi_is_submitted')->default(false);
            $table->string('loi_file_path', 255)->nullable()->default(null);

            $table->boolean('vaxcard_is_submitted')->default(false);
            $table->string('vaxcard_file_path', 255)->nullable()->default(null);

            $table->boolean('cor_is_submitted')->default(false);
            $table->string('cor_file_path', 255)->nullable()->default(null);
            
            $table->boolean('blog_is_submitted')->default(false);
            $table->string('blog_file_path', 255)->nullable()->default(null);

            $table->boolean('weekly_is_submitted')->default(false);
            $table->string('weekly_file_path', 255)->nullable()->default(null);

            $table->boolean('portfolio_is_submitted')->default(false);
            $table->string('portfolio_file_path', 255)->nullable()->default(null);

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
