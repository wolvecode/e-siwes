<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Supervisor extends Authenticatable
{
    use HasFactory;

    protected $guard =  'supervisor';

    protected $fillable = [
        'name',
        'bio',
        'git_url',
        'linkedin_url',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
