<?php

namespace App\Models;

use App\Models\StudentRecord;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Node\Block\Document;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'account_id',
        'gender',

        'contact',
        'email',
        'password',
        
        'course',
        'block',
        'year_level',

        'company_id',
        'status',
        'hrs_rendered',
        'hrs_remaining'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'account_id', 'account_id');
    }

    public function studentrecord() {
        return $this->hasOne(StudentRecord::class, 'student_id');
    }

    public function documents() {
        return $this->belongsToMany(Documents::class, 'student_documents')->withTimestamps();
    }
    
}