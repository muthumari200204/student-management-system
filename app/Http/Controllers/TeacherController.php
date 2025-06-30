<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $subjectTeacherMap = [
            'English Language'   => 'Ms. Priya R.',
            'Mathematics'        => 'Mr. Ravi Kumar',
            'Science'            => 'Mr. Arvind K.',
            'Social Studies'     => 'Ms. Priya R.',
            'Computer Science'   => 'Mr. Arvind K.',
            'Tamil Literature'   => 'Ms. Priya R.',
            'Physics'            => 'Mr. Ravi Kumar',
            'Chemistry'          => 'Mrs. Anjali Devi',
            'Biology'            => 'Mrs. Anjali Devi',
            'Commerce'           => 'Mr. Ravi Kumar',
            'Economics'          => 'Ms. Priya R.',
            'Physical Education' => 'Mr. Arvind K.',
            'Art & Design'       => 'Ms. Priya R.',
            'Music'              => 'Ms. Priya R.',
            'Environmental Science' => 'Mr. Arvind K.',
        ];

        $teachers = Teacher::all();

        $courseMap = [
            'Mrs. Anjali Devi' => ['Biology', 'Chemistry'],
            'Mr. Ravi Kumar'   => ['Mathematics', 'Physics'],
            'Ms. Priya R.'     => ['English Language', 'Social Studies', 'Tamil Literature', 'Art & Design', 'Music', 'Economics'],
            'Mr. Arvind K.'    => ['Science', 'Computer Science', 'Physical Education', 'Environmental Science'],
        ];

        foreach ($teachers as $teacher) {
            $teacher->courses = $courseMap[$teacher->name] ?? ['General Studies'];
        }

        return view('teachers.index', compact('subjectTeacherMap', 'teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
        ]);

        Teacher::create($validated);

        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully!');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($validated);

        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully!');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully!');
    }
}
