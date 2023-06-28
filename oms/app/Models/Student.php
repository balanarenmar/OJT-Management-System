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
        'course',
        'block',
        'gender',
        'status',
        'hrs_rendered',
        'hrs_remaining'
    ];

}
