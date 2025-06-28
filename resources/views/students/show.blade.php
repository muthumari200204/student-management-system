{{-- resources/views/students/show.blade.php --}}
@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Student Details</div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $student->name }}</p>
        <p><strong>Address:</strong> {{ $student->address }}</p>
        <p><strong>Mobile:</strong> {{ $student->mobile }}</p>
        <a href="{{ url('/student') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
