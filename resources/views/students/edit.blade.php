@extends('layout')

@section('content')
    <h2>Edit Student</h2>

    {{-- Display validation errors --}}
    @if ($errors->any())
        <div class="w3-panel w3-red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PATCH') {{-- Use PATCH or PUT for updates --}}

        <p>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $student->name) }}" class="w3-input" required>
        </p>

        <p>
            <label>Address</label>
            <input type="text" name="address" value="{{ old('address', $student->address) }}" class="w3-input" required>
        </p>

        <p>
            <label>Mobile</label>
            <input type="text" name="mobile" value="{{ old('mobile', $student->mobile) }}" class="w3-input" required>
        </p>

        <p>
            <button class="w3-button w3-blue" type="submit">Update</button>
        </p>
    </form>
@endsection
