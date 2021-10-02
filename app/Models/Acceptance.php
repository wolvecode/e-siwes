<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acceptance extends Model
{
    use HasFactory;


    /**
     * Fields allowed for mass assignment.
     *
     * @var string[]
     */
    protected $fillable = [
        'student_id',
        'organization_id',
        'description',
        'attachment',
        'verified',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function organization()
    {
        return $this->hasOne(Organization::class, 'id', 'organization_id', 'id');
    }
}
