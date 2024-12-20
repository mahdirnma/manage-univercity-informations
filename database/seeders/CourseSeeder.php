<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Course::create([
             'title' => 'Electrical Engineering',
             'all_semesters' => '148',
         ]);
         Course::create([
             'title' => 'Elementary education',
             'all_semesters' => '146',
         ]);
    }
}
