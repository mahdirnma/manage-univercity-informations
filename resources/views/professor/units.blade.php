@extends('layout.app2')
@section('title')
    units
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                {{--                <a href="{{route('unit.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add courses +</a>--}}
                <h2 class="text-xl">units</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        {{--
                                                <td class="text-center">delete</td>
                                                <td class="text-center">update</td>
                        --}}
                        <td class="text-center">more information</td>
                        <td class="text-center">course</td>
                        <td class="text-center">lesson</td>
                        <td class="text-center">id</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($units as $unit)
                        <tr>
                            {{--
                                                        <td class="text-center">
                                                            <form action="{{route('course.destroy',compact('course'))}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="text-green-600">delete</button>
                                                            </form>
                                                        </td>
                                                        <td class="text-center">
                                                            <form action="{{route('course.edit',compact('course'))}}" method="get">
                                                                @csrf
                                                                <button type="submit" class="text-cyan-600">update</button>
                                                            </form>
                                                        </td>
                            --}}
                            <td class="text-center">
                                <form action="{{--{{route('unit.show',compact('unit'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">info</button>
                                </form>
                            </td>
                            <td class="text-center">{{$unit->course->title}}</td>
                            <td class="text-center">{{$unit->lesson->title}}</td>
                            <td class="text-center">{{$unit->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$units->links()}}</div>
        </div>
@endsection
