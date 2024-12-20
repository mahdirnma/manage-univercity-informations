<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Semester::create([
            'title' => '05',
            'year' => '1403',
            'half_year' => '01',
        ]);
        Semester::create([
            'title' => '06',
            'year' => '1402',
            'half_year' => '02',
        ]);
    }
}
