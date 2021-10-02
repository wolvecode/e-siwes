<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    /**
     * Fields allowed for mass assignment.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'state',
        'city',
        'website',
        'email',
        'request_id',
        'address',
        'contact',
        'verified',
        'placement_attachment',
        'placement_description',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function studentRequest()
    {
        return $this->hasMany(Student::class, 'id', 'request_id', 'id');
    }
}
