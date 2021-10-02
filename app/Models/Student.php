<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends  Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'bio',
        'session_id',
        'user_id',
        'email',
        'assign',
        'matric_no',
        'organization_id',
        'location',
        'git_url',
        'linkedin_url',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    //User (supervisor)
    public function supervisor()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function acceptance()
    {
        return $this->hasOne(Acceptance::class);
    }

    public function organizationRequest()
    {
        return $this->belongsTo(Organization::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'user_id', 'user_id');
    }
}
