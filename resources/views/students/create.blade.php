@extends('layout')

@section('content')
    <h2>Add Student</h2>

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

    <form method="POST" action="{{ route('students.store') }}">
        @csrf

        <p>
            <input class="w3-input" type="text" name="name" value="{{ old('name') }}" placeholder="Name" required>
        </p>

        <p>
            <input class="w3-input" type="text" name="address" value="{{ old('address') }}" placeholder="Address" required>
        </p>

        <p>
            <input class="w3-input" type="text" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile" required>
        </p>

        <p>
            <button class="w3-button w3-green" type="submit">Submit</button>
        </p>
    </form>
@endsection
