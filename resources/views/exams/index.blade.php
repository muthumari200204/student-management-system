{{-- resources/views/exams/index.blade.php --}}
@extends('layout')

@section('content')
    <h1 class="mb-4">Exam List</h1>

    <a href="{{ route('exams.create') }}" class="btn btn-success mb-3">+ Add New Exam</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($exams->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Subject</th>
                    <th>Exam Date</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($exams as $exam)
                <tr>
                    <td>{{ $exam->id }}</td>
                    <td>{{ $exam->title }}</td>
                    <td>{{ $exam->subject }}</td>
                    <td>{{ $exam->exam_date }}</td>
                    <td>{{ $exam->description }}</td>
                    <td>
                        <a href="{{ route('exams.show', $exam->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('exams.edit', $exam->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('exams.destroy', $exam->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No exams found.</p>
    @endif
@endsection
