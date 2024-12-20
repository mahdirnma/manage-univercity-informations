<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable=[
        'course_id',
        'lesson_id',
        'semester_id',
        'professor_id',
        'capacity',
        'is_active'
    ];
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }
    public function professor(){
        return $this->belongsTo(Professor::class);
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}
