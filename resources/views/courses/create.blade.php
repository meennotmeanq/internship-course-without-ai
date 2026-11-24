@extends('layouts.app')

@section('title', 'creating course page')
@section('content')
<div class="flex justify-center">
    <div class="border p-8 py-10 bg-white shadow-2xl">
        <form action="{{ route('course.store')}}" method="post">
            @csrf
            <div class="pb-2">
                <label for="course_name" class="font-medium">Course Name</label><br>
                <input name="course_name" class="outline px-1"><br>
                @error('course_name')
                 <p class="text-red-400">{{ $message }}</p>   
                @enderror
            </div>

            <div class="pb-2">
                <label for="course_description" class="font-medium">Course Description</label><br>
                <textarea name="course_description" class="outline resize-none px-1" cols="40" rows="10"></textarea>
                @error('course_description')
                 <p class="text-red-400">{{ $message }}</p>   
                @enderror
            </div>

            <div class="pb-2">
                <label for="course_image" class="font-medium">Course Image</label><br>
                <input type="file" name="course_image" class="bg-(--lightpurp) border p-0.5 cursor-pointer hover:bg-(--purp) text-white transition-all duration-500 font-medium px-1 "><br>
                @error('course_image')
                 <p class="text-red-400">{{ $message }}</p>   
                @enderror
            </div>

            <div class="pb-2">
                <label for="course_video" class="font-medium">Course Video</label><br>
                <input type="file" name="course_video" class="bg-(--lightpurp) border p-0.5 cursor-pointer hover:bg-(--purp) text-white transition-all duration-500 font-medium px-1"><br>
                @error('course_video')
                 <p class="text-red-400">{{ $message }}</p>   
                @enderror
            </div>
            <input type="submit" class="bg-(--lightpurp) border p-1.5 cursor-pointer text-shadow-md text-white border-(--lightpurp) hover:bg-(--purp) transition-all duration-500 font-medium">
        </form>
    </div>
</div>
    
@endsection