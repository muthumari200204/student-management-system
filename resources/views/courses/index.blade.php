@extends('layout')

@section('content')
    <h2 class="mb-4">📚 School Courses</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('courses.store') }}" method="POST" class="mb-4">
        @csrf
    </form>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Course Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staticCourses as $index => $course)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $course }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
