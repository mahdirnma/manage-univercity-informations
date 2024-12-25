@extends('layout.app2')
@section('title')
    {{$student->name}} classes
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                {{--                <a href="{{route('unit.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add courses +</a>--}}
                <h2 class="text-xl">{{$student->name}} classes</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">score</td>
                        <td class="text-center">capacity</td>
                        <td class="text-center">professor</td>
                        <td class="text-center">semester</td>
                        <td class="text-center">lesson</td>
                        <td class="text-center">course</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($units as $unit)
                        <tr>
                            <td class="text-center">{{$unit->pivot->score!=null?$unit->pivot->score:'no score is given'}}</td>
                            <td class="text-center">{{$unit->capacity}}</td>
                            <td class="text-center">{{$unit->professor->name}}</td>
                            <td class="text-center">{{$unit->semester->title}}</td>
                            <td class="text-center">{{$unit->lesson->title}}</td>
                            <td class="text-center">{{$unit->course->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <div class="mt-5">{{$units->links()}}</div>--}}
        </div>
@endsection
