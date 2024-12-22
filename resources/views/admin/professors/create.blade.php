@extends('layout.app')
@section('title')
    add professor
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add professor</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('professor.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="name" class="font-semibold ml-5">: name</label>
                            <input type="text" name="name" value="{{old('name')}}" id="name" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('name')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="personal_code" class="font-semibold ml-5">: personal code</label>
                            <input type="number" name="personal_code" value="{{old('personal_code')}}" id="personal_code" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('personal_code')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="phone_number" class="font-semibold ml-5">: phone number</label>
                            <input type="number" name="phone_number" value="{{old('phone_number')}}" id="phone_number" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('phone_number')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="teaching_field" class="font-semibold ml-5">: teaching field</label>
                            <input type="text" name="teaching_field" value="{{old('teaching_field')}}" id="teaching_field" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('teaching_field')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
