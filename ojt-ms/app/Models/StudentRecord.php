<?php

namespace App\Models;

use App\Models\Student;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentRecord extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'student_id',
        
        'medcert_is_submitted', 'medcert_file_path',
        'jurat_is_submitted', 'jurat_file_path',
        'waver_is_submitted', 'waver_file_path',
        'acceptance_is_submitted', 'acceptance_file_path',
        'mentorship_is_submitted', 'mentorship_file_path',
        'moa_is_submitted', 'moa_file_path',
        'loi_is_submitted', 'loi_file_path',
        'vaxcard_is_submitted', 'vaxcard_file_path',
        'cor_is_submitted', 'cor_file_path',
        'blog_is_submitted', 'blog_file_path',
        'weekly_is_submitted', 'weekly_file_path',
        'portfolio_is_submitted', 'portfolio_file_path',
    ];

    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'account_id');
    }
}
