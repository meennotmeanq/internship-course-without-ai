@extends('layouts.app')

@section('title', 'all course page')
@section('content')
    @if ($courses->isNotEmpty())
        @foreach ($courses as $course)
        <div class="border w-72 h-96 bg-white rounded-4xl shadow-xl hover:scale-110 transition-all duration-500 cursor-pointer">
            <div>
                <h1>
                    {{$course->course_name}}
                </h1>
                <h1>
                    {{$course->course_description}}
                </h1>
            </div>
        </div>
        @endforeach
        @else
        <div class="flex justify-center">
            <div class="text-3xl text-(--darkblue) text-shadow-md font-extrabold">
                <h1>Nothing Here</h1>
            </div>
        </div>
    @endif

@endsection