<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'student_number',
        'phone_number',
        'field',
        'level',
        'is_active'
    ];

    public function semesters()
    {
        return $this->belongsToMany(Semester::class);
    }
}
