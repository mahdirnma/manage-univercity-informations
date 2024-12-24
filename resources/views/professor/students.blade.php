@extends('layout.app2')
@section('title')
    students
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                {{--                <a href="{{route('unit.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add courses +</a>--}}
                <h2 class="text-xl">students</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        {{--
                                                <td class="text-center">delete</td>
                                                <td class="text-center">update</td>
                        --}}
                        <td class="text-center">score</td>
                        <td class="text-center">phone number</td>
                        <td class="text-center">student number</td>
                        <td class="text-center">name</td>
                        <td class="text-center">id</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($registrations as $registration)
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
                                <form action="{{--{{route('Master.unit.student',compact('unit'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">score</button>
                                </form>
                            </td>
                            <td class="text-center">{{$registration->student->phone_number}}</td>
                            <td class="text-center">{{$registration->student->student_number}}</td>
                            <td class="text-center">{{$registration->student->name}}</td>
                            <td class="text-center">{{$registration->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$registrations->links()}}</div>
        </div>
@endsection
