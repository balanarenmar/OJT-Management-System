<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'comp_type',
        'comp_name',
        'comp_contact',

        'comp_address_street',
        'comp_address_city',
        'comp_address_province',

        'ojt_supervisor',
        'department',
        
        'deployed_count'
    ];
}
