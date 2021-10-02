<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    /**
     * Fields allowed for mass assignment.
     *
     * @var string[]
     */
    protected $fillable = [
        'student_id',
        'content',
        'view',
        'attachment',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
