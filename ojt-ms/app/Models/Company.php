<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'company_type',
        'company_name',
        'company_contact',

        'company_address_street',
        'company_address_city',
        'company_address_province',

        'ojt_supervisor',
        'department',
        
        'deployed_count'
    ];
}
