@extends('layout.app')
@section('title')
    Professor Assignment
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">Professor Assignment</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('unit.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="course_id" class="font-semibold ml-5">: course</label>
                            <select name="course_id" id="course_id" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                @foreach($courses as $course)
                                    <option value={{$course->id}}>{{$course->title}}</option>
                                @endforeach
                            </select>
                            @error('course_id')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="lesson_id" class="font-semibold ml-5">: lesson</label>
                            <select name="lesson_id" id="lesson_id" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                @foreach($lessons as $lesson)
                                    <option value={{$lesson->id}}>{{$lesson->title}}</option>
                                @endforeach
                            </select>
                            @error('lesson_id')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="semester_id" class="font-semibold ml-5">: semester</label>
                            <select name="semester_id" id="semester_id" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                @foreach($semesters as $semester)
                                    <option value={{$semester->id}}>{{$semester->title}}</option>
                                @endforeach
                            </select>
                            @error('semester_id')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="professor_id" class="font-semibold ml-5">: professor</label>
                            <select name="professor_id" id="professor_id" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                @foreach($professors as $professor)
                                    <option value={{$professor->id}}>{{$professor->name}}</option>
                                @endforeach
                            </select>
                            @error('professor_id')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="capacity" class="font-semibold ml-5">: capacity</label>
                            <input type="number" name="capacity" min="5" max="40" value="{{old('capacity')}}" id="capacity" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('capacity')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
