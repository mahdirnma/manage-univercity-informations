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
        <h1 class="text-3xl pt-8">login</h1>
        <form action="{{route('admin.login.show')}}" method="get" class="w-5/6 flex flex-col items-center justify-start mt-20">
            @csrf
            <button type="submit" class="bg-gray-200 py-5 px-8 rounded">login as university admin</button>
{{--            <input type="hidden" name="role" value="1">--}}
        </form>
        <form action="{{route('professor.login.show')}}" method="get" class="w-5/6 flex flex-col items-center justify-start mt-20">
            @csrf
            <button type="submit" class="bg-gray-200 py-5 px-8 rounded">login as professor</button>
        </form>
        <form action="{{route('student.login.show')}}" method="get" class="w-5/6 flex flex-col items-center justify-start mt-20">
            @csrf
            <button type="submit" class="bg-gray-200 py-5 px-8 rounded">login as student</button>
        </form>
    </div>
</div>
</body>
</html>
