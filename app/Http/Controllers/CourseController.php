<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

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
        return view ('courses.create');
    }

    public function store()
    {
        $course = new Course();
        $course->name = request('name');
        $course->description = request('description');
        $course->save();

        return redirect('/home')->with('mssg', 'Course added!');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect('/courses');
    }

}
