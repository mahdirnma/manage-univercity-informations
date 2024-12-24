<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Professor;
use App\Models\Semester;
use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::where('is_active', 1)->paginate(2);
        return view('admin.units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::where('is_active', 1)->get();
        $lessons = Lesson::where('is_active', 1)->get();
        $semesters = Semester::where('is_active', 1)->get();
        $professors = Professor::where('is_active', 1)->get();
        return view('admin.lessons.assignment', compact('courses', 'lessons', 'semesters', 'professors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnitRequest $request)
    {
        $unit= Unit::create($request->validated());
        if ($unit) {
            return to_route('lesson.index');

        } else {
            return to_route('unit.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        $capacity=$unit->registrations()->count();
        $remain_capacity=$unit->capacity-$capacity;
        return view('admin.units.show', compact('unit','remain_capacity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
