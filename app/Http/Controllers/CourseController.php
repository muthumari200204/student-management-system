<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $staticCourses = [
            'English Language',
            'Mathematics',
            'Science',
            'Social Studies',
            'Computer Science',
            'Tamil Literature',
            'Physics',
            'Chemistry',
            'Biology',
            'Commerce',
            'Economics',
            'Physical Education',
            'Art & Design',
            'Music',
            'Environmental Science'
        ];

        return view('courses.index', compact('staticCourses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        session()->flash('success', 'Course "' . $request->name . '" added (simulated).');
        return redirect()->route('courses.index');
    }

    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}
