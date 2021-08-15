<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
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
        'contact'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
