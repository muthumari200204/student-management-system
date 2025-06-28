@extends('layout')

@section('content')
    <h2 class="w3-text-red">Course List</h2>

    @if (session('success'))
        <div class="w3-panel w3-green">{{ session('success') }}</div>
    @endif

    <a href="{{ route('courses.create') }}" class="w3-button w3-green w3-margin-bottom">Add New Course</a>

    @if ($courses->count())
        <table class="w3-table-all w3-hoverable w3-card-4">
            <thead>
                <tr class="w3-light-grey">
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->description }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course->id) }}" class="w3-button w3-blue w3-small">Edit</a>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w3-button w3-red w3-small" onclick="return confirm('Delete this course?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No courses found.</p>
    @endif
@endsection
