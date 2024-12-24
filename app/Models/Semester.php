<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'year',
        'half_year',
        'is_active'
    ];
    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);

    }
}
