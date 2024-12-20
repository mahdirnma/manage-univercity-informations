<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'all_semesters',
        'is_active'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
