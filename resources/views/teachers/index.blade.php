@extends('layout')

@section('content')
    <h2 class="w3-text-red">Teacher List</h2>

    {{-- Flash success message --}}
    @if (session('success'))
        <div class="w3-panel w3-green w3-padding">
            {{ session('success') }}
        </div>
    @endif

    {{-- Link to create a new teacher --}}
    <a href="{{ route('teachers.create') }}" class="w3-button w3-green w3-margin-bottom">Add New Teacher</a>

    {{-- Check if teachers exist --}}
    @if ($teachers->count())
        <table class="w3-table-all w3-hoverable w3-card-4">
            <thead>
                <tr class="w3-light-grey">
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->address }}</td>
                        <td>{{ $teacher->mobile }}</td>
                        <td>
                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="w3-button w3-blue w3-small">Edit</a>

                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w3-button w3-red w3-small" onclick="return confirm('Are you sure you want to delete this teacher?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="w3-text-grey">No teachers found.</p>
    @endif
@endsection
