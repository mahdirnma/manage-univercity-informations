@extends('layout.app2')
@section('title')
    add {{$unit->lesson->title}}'s score
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add {{$unit->lesson->title}}'s score for {{$registration->student->name}}</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('master.score.create',compact('unit','registration'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="score" class="font-semibold ml-5">: score</label>
                            <input type="number" name="score" step="0.01" min="0" max="20" value="{{old('score')}}" id="score" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('score')
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
