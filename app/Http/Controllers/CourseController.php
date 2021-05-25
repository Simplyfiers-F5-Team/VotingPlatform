<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\CourseCreateRequest;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('name')->get();
        return view('courses.index', ['courses' => $courses]);
    }

    public function show()
    {
        return view('courses.show');
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(CourseCreateRequest $request)
    {
        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->save();

        return redirect('/home')->with('mssg', 'Course added!');
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(CourseCreateRequest $request, Course $course)
    {
        $course->name = $request->name;
        $course->description = $request->description;
        $course->save();

        return redirect('/home')->with('mssg', 'Course updated!');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index');
    }

    public function voteform()
    {
        $courses = Course::orderBy('name')->get();
        return view('courses.voteoptions', ['courses' => $courses]);
    }
}
