<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'ali azizi',
            'student_number' => '9711122274',
            'phone_number' => '09184651635',
            'field' => 'elementary education',
            'level' => 'bachelor',
        ]);
        Student::create([
            'name' => 'sara zandi',
            'student_number' => '9811122364',
            'phone_number' => '09181681635',
            'field' => 'elementary education',
            'level' => 'doctorate',
        ]);

    }
}
