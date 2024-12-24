@extends('layout.app')
@section('title')
    add lesson
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add lesson</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('lesson.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="name" class="font-semibold ml-5">: title</label>
                            <input type="text" name="title" value="{{old('title')}}" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('title')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="unit_number" class="font-semibold ml-5">: unit number</label>
                            <select name="unit_number" id="unit_number" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            @error('unit_number')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
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
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
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
                            <label for="default_semester" class="font-semibold ml-5">: default semester</label>
                            <select name="default_semester" id="default_semester" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                            </select>
                            @error('default_semester')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>

                    </div>
                </form>
            </div>
        </div>
@endsection
