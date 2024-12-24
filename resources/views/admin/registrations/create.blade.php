@extends('layout.app')
@section('title')
    Student Registration
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">Student Registration</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('student.registration.store',compact('student'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
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
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="unit_id" class="font-semibold ml-5">: unit</label>
                            <select name="unit_id" id="unit_id" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                @foreach($units as $unit)
                                    <option value={{$unit->id}}>{{$unit->lesson->title}} in {{$unit->course->title}}</option>
                                @endforeach
                            </select>
                            @error('unit_id')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                    </div>
                </form>
            </div>
        </div>
@endsection
