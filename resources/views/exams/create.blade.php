@extends('layout')

@section('content')
<h1>Create Exam</h1>

<form action="{{ route('exams.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Subject</label>
        <input type="text" name="subject" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Exam Date</label>
        <input type="date" name="exam_date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <button class="btn btn-success">Create</button>
</form>
@endsection
