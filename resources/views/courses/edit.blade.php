@extends('layout')

@section('content')
    <h2 class="w3-text-red">Edit Course</h2>

    @if ($errors->any())
        <div class="w3-panel w3-red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.update', $course->id) }}" method="POST" class="w3-container w3-card-4 w3-padding">
        @csrf
        @method('PUT')

        <label><b>Title</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="title" value="{{ old('title', $course->title) }}" required>

        <label><b>Description</b></label>
        <textarea class="w3-input w3-border w3-margin-bottom" name="description" required>{{ old('description', $course->description) }}</textarea>

        <button type="submit" class="w3-button w3-blue">Update</button>
        <a href="{{ route('courses.index') }}" class="w3-button w3-gray">Cancel</a>
    </form>
@endsection
