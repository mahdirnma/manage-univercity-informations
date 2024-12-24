<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function units()
    {
        $professor=session('professor');
        $units=$professor->units()->paginate(2);
        return view('professor.units', compact('professor','units'));
    }
}
