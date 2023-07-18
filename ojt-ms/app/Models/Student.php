<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
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

}
