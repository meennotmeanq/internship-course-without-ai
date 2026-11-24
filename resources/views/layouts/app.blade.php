<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | hello</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-(--sand)">
    <div class="bg-(--darkblue) p-10 flex justify-center shadow-lg">
        <h1 class="text-white text-3xl font-extrabold text-shadow-lg hover:scale-105 transition-all duration-300">
            <a href="{{ route('home') }}">Internship Website</a>
        </h1>
    </div>
    <div class="py-4 bg-(--purp) text-white font-semibold shadow-xl ">
        <ul class="flex justify-evenly ">
        <li><a href="{{ route('course.index')}}" class="p-3 text-shadow-md hover:text-(--darkblue) transition-all duration-300">All Courses</a></li>
        <li><a href="#" class="p-3 text-shadow-md hover:text-(--darkblue) transition-all duration-300">My Courses</a></li>
        <li><a href="#" class="p-3 text-shadow-md hover:text-(--darkblue) transition-all duration-300">Profile</a></li>
        <li><a href="{{ route ('course.create') }}" class="p-3 text-shadow-md hover:text-(--darkblue) transition-all duration-300">Manage Course</a></li>
    </div>
    <div class="m-10">
        @yield('content')

    </div>
</body>

</html>
