<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::query()->latest()->get();
        return view('courses.index', [
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "course_name" => "required|min:5",
            "course_description" => "required",
            "course_image" => "required|image|mimes:jpeg,png,gif,svg|max:2048",
            "course_video" => "required|mimes:mp4,mov,av,wmv|max:2048"
        ]);

        if ($validator->passes()){
            $course = new Course();
            $course->course_name = $request->course_name;
            $course->course_description = $request->course_description;
            $course->course_image = $request->file("course_image")->store("course_image");
            $course->course_video = $request->file("course_video")->store("course_video");
            $course->save();

            return redirect()
                ->route("course.index")
                ->with("success", "Course has been created.");
        }else{
            return redirect()
                ->route("course.create")
                ->withInput()
                ->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
