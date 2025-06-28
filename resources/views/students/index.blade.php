@extends('layout')

@section('content')
    <h2 class="w3-text-red">Student List</h2>

    @if (session('success'))
        <div class="w3-panel w3-green">{{ session('success') }}</div>
    @endif

    <a href="{{ route('students.create') }}" class="w3-button w3-green w3-margin-bottom">Add New Student</a>

    @if ($students->count())
        <table class="w3-table-all w3-hoverable">
            <thead>
                <tr class="w3-light-grey">
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->mobile }}</td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="w3-button w3-green w3-small">View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="w3-button w3-blue w3-small">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w3-button w3-red w3-small">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No students found.</p>
    @endif

    {{-- JavaScript confirmation --}}
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this student?");
        }
    </script>
@endsection
