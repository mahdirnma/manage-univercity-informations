<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::create([
            'title' => 'anishe 1',
            'unit_number' => '2',
            'type' => 'public',
            'default_semester' => '02',
            'course_id' => 1,
            'lesson_id' => null,
        ]);
        Lesson::create([
            'title' => 'anishe 2',
            'unit_number' => '2',
            'type' => 'public',
            'default_semester' => '04',
            'course_id' => 1,
            'lesson_id' => 1,
        ]);

    }
}
