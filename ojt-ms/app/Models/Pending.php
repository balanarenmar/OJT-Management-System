<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pending extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'account_id',
        'first_name',
        'middle_initial',
        'last_name',
        'email',
        'password',
        
        'contact',
        'course',
        'block',
        'gender',
        'year_level'
        
    ];
}
