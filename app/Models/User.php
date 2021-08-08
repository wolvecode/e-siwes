<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Model's auth guard.
     *
     * @var string
     */
    protected $guard =  'user';

    /**
     * Fields allowed for mass assignment.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'bio',
        'role',
        'git_url',
        'linkedin_url',
        'email',
        'password'
    ];

    protected $casts = [
        'role' => 'int',
    ];

    /**
     * Fields hidden from array serializing.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Determine if user is super admin.
     *
     * @return bool
     */
    public function isSuperAdmin()
    {
        return $this->role === 1;
    }

    /**
     * Determine if user is a normal admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role === 2;
    }

    public function isGlobalAdmin()
    {
        return $this->role === 1 || $this->role === 2;
    }

    /**
     * Determine if the user is a lecturer.
     *
     * @return bool
     */
    public function isLecturer()
    {
        return $this->role === 3;
    }
}
