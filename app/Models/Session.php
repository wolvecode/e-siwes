<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    /**
     * Fields allowed for mass assignment.
     *
     * @var string[]
     */
    protected $fillable = [
        'year',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
