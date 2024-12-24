<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Unit;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function units()
    {
        $professor=session('professor');
        $units=$professor->units()->paginate(2);
        return view('professor.units', compact('professor','units'));
    }

    public function students(Unit $unit)
    {
        $registrations=$unit->registrations()->paginate(2);
        return view('professor.students', compact('unit','registrations'));
    }

    public function score(Unit $unit, Registration $registration)
    {
        return view('professor.score', compact('unit','registration'));
/*        $students=$unit->registrations()->get();
        $score='';
        foreach ($students as $student) {
            $score=$student->pivot->where('registration_id',$registration)->get();

        }
        return $score->score();*/
    }
}
