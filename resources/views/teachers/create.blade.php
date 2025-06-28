@extends('layout')

@section('content')
    <h2 class="w3-text-red">Add New Teacher</h2>

    @if ($errors->any())
        <div class="w3-panel w3-red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('teachers.store') }}" method="POST" class="w3-container w3-card-4 w3-padding">
        @csrf

        <label><b>Name</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="name" required>

        <label><b>Address</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="address" required>

        <label><b>Mobile</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="mobile" required>

        <button type="submit" class="w3-button w3-green">Save</button>
        <a href="{{ route('teachers.index') }}" class="w3-button w3-gray">Cancel</a>
    </form>
@endsection
