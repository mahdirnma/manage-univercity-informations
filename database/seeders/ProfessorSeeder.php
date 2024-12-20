<?php

namespace Database\Seeders;

use App\Models\Professor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Professor::create([
            'name' => 'amini',
            'personal_code' => '98065986',
            'teaching_field' => 'Andishe',
            'phone_number' => '09226935852',
        ]);
        Professor::create([
            'name' => 'nasiri',
            'personal_code' => '98064996',
            'teaching_field' => 'Art',
            'phone_number' => '09036935852',
        ]);
    }
}
