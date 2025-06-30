@extends('layout')

@section('content')
<h1 class="mb-4">Exam Details</h1>

<ul class="list-group mb-4">
    <li class="list-group-item"><strong>Title:</strong> {{ $exam->title }}</li>
    <li class="list-group-item"><strong>Subject:</strong> {{ $exam->subject }}</li>
    <li class="list-group-item"><strong>Exam Date:</strong> {{ \Carbon\Carbon::parse($exam->exam_date)->format('F j, Y') }}</li>
    <li class="list-group-item"><strong>Description:</strong> {{ $exam->description }}</li>
</ul>

<!-- Action Buttons -->
<a href="{{ route('exams.edit', $exam->id) }}" class="btn btn-primary">✏️ Edit Exam</a>
<a href="{{ route('exams.index') }}" class="btn btn-secondary">← Back to Exam List</a>
@endsection
