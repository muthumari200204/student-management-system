@extends('layout')

@section('content')
<h2 class="mb-4">Add New Course</h2>

<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Course Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Add Course</button>
</form>
@endsection
