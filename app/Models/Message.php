<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    /**
     * Fields allowed for mass assignment.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'message',
    ];

    public function students()
    {
        return $this->hasManyThrough(Student::class, User::class, 'user_id', 'id');
    }
}
