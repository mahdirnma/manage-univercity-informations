@extends('layout.app')
@section('title')
    Admin panel
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">Admin panel</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <div class="w-[90%] h-3/5 flex flex-row-reverse justify-start">
                    <div class="w-1/5 h-full rounded-lg shadow-lg shadow-gray-400 flex flex-col items-center pt-10 mx-5">
                        <p class="text-l font-bold">Number of Students</p>
                        <p class="text-3xl font-semibold text-red-600 mt-7">{{$students}}</p>
                    </div>
                    <div class="w-1/5 h-full rounded-lg shadow-lg shadow-gray-400 flex flex-col items-center pt-10 mx-5">
                        <p class="text-l font-bold">Number of Professors</p>
                        <p class="text-3xl font-semibold text-red-600 mt-7">{{$professors}}</p>
                    </div>
                    <div class="w-1/5 h-full rounded-lg shadow-lg shadow-gray-400 flex flex-col items-center pt-10 mx-5">
                        <p class="text-l font-bold">Number of Lessons</p>
                        <p class="text-3xl font-semibold text-red-600 mt-7">{{$lessons}}</p>
                    </div>
                </div>
            </div>
        </div>
@endsection
