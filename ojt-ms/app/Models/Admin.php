<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'account_id',
        'first_name',
        'middle_initial',
        'last_name',
        'contact_number',
        'email',
        'password',
        
        'role',
    ];
}