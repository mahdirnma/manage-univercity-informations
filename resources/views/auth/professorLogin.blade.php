<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-svw h-svh flex justify-center items-center bg-gray-200">
    <div class="w-2/6 h-5/6 bg-white rounded-xl flex flex-col items-center justify-start">
        <h1 class="text-3xl pt-8">professor Login</h1>
        <form action="{{route('professor.login')}}" method="post" class="w-5/6 flex flex-col items-end justify-start mt-10">
            @csrf
            <label for="name" class="mt-10">name</label>
            <input type="text" name="name" id="name" class="w-full h-10 bg-gray-100 rounded mt-3">
            @if($errors->has('name'))
                <p class="text-red-600 mt-2">{{$errors->first('name')}}</p>
            @endif
            <label for="personal_code" class="mt-10">personal code</label>
            <input type="number" name="personal_code" id="personal_code" class="w-full h-10 bg-gray-100 rounded mt-3">
            @if($errors->has('personal_code'))
                <p class="text-red-600 mt-2">{{$errors->first('personal_code')}}</p>
            @endif
            <input type="submit" value="login" class="mt-10 w-full h-12 text-gray-100 bg-gray-600 rounded  cursor-pointer">
        </form>
    </div>
</div>
</body>
</html>
