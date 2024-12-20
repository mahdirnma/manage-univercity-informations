<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create([
            'course_id' => 2,
            'lesson_id' => 1,
            'semester_id' => 1,
            'professor_id' => 1,
            'capacity' => 40,
        ]);
        Unit::create([
            'course_id' => 2,
            'lesson_id' => 2,
            'semester_id' => 2,
            'professor_id' => 1,
            'capacity' => 30,
        ]);

    }
}
