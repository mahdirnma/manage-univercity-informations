<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CourseSeeder::class,
            SemesterSeeder::class,
            StudentSeeder::class,
            ProfessorSeeder::class,
            LessonSeeder::class,
            UnitSeeder::class,
        ]);
    }
}
