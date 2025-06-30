<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    // Show all exams
    public function index()
    {
        $exams = Exam::all();
        return view('exams.index', compact('exams'));
    }

    // Show form to create a new exam
    public function create()
    {
        return view('exams.create');
    }

    // Store new exam in database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'exam_date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        Exam::create($request->all());

        return redirect()->route('exams.index')->with('success', 'Exam created successfully.');
    }

    // Show a single exam's details
    public function show(Exam $exam)
    {
        return view('exams.show', compact('exam'));
    }

    // Show form to edit an existing exam
    public function edit(Exam $exam)
    {
        return view('exams.edit', compact('exam'));
    }

    // Update an existing exam
    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'exam_date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        $exam->update($request->all());

        return redirect()->route('exams.index')->with('success', 'Exam updated successfully.');
    }

    // Delete an exam
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->route('exams.index')->with('success', 'Exam deleted successfully.');
    }
}
