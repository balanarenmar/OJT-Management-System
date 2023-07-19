<?php

namespace App\Models;

use App\Models\User;
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

    public function user() {
        return $this->belongsTo(User::class, 'account_id', 'account_id');
    }
}