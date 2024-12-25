@extends('layout.app2')
@section('title')
    {{$student->name}} {{$registration->semester->title}} semester gpa
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                {{--                <a href="{{route('unit.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add courses +</a>--}}
                <h2 class="text-xl">{{$student->name}} {{$registration->semester->title}} semester gpa</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">gpa</td>
                        <td class="text-center">semester</td>
                        <td class="text-center">student number</td>
                        <td class="text-center">name</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">{{$gpa}}</td>
                        <td class="text-center">{{$registration->semester->title}}</td>
                        <td class="text-center">{{$student->student_number}}</td>
                        <td class="text-center">{{$student->name}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
{{--            <div class="mt-5">{{$units->links()}}</div>--}}
        </div>
@endsection
