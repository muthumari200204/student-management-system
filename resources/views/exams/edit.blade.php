@extends('layout')

@section('content')
<h1>Edit Exam</h1>

<form action="{{ route('exams.update', $exam) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ $exam->title }}" required>
    </div>

    <div class="mb-3">
        <label>Subject</label>
        <input type="text" name="subject" class="form-control" value="{{ $exam->subject }}" required>
    </div>

    <div class="mb-3">
        <label>Exam Date</label>
        <input type="date" name="exam_date" class="form-control" value="{{ $exam->exam_date }}" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $exam->description }}</textarea>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection
