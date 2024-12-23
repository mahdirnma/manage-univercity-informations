<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable=[
        'semester_id',
        'student_id',
        'status',
        'gpa'
    ];
    public function units()
    {
        return $this->belongsToMany(Unit::class);
    }
}
