<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documents extends Model
{
    use HasFactory;

    protected $fillable = [
        'doc_name',
        'doc_path',
        'mime_type',
    ];

    public function students() {
        return $this->belongsToMany(Student::class, 'student_documents')->withTimestamps();
    }
}
