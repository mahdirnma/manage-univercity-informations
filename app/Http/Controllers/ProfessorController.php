<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professors = Professor::where('is_active', 1)->paginate(2);
        return view('admin.professors.index', compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.professors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfessorRequest $request)
    {
        $professor=Professor::create($request->validated());
        if($professor){
            return to_route('professor.index');
        }else{
            return to_route('professor.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Professor $professor)
    {
        return view('professor.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professor $professor)
    {
        return view('admin.professors.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfessorRequest $request, Professor $professor)
    {
        $status = $professor->update($request->validated());
        if($status){
            return to_route('professor.index');
        }else{
            return to_route('professor.edit', $professor);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professor $professor)
    {
        $professor->update(['is_active' => 0]);
        return to_route('professor.index');
    }

}
