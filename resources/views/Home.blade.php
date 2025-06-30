@extends('layout')

@section('content')
<h1 class="text-center mb-4">Student Management System</h1>

<!-- Link to students page -->
<p class="text-center mb-4">
    <a href="{{ route('students.index') }}" class="btn btn-primary">Go to Students</a>
</p>

<!-- Image Slider -->
<div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('image/school.jpg') }}" class="d-block w-100" alt="School">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('image/student.jpeg') }}" class="d-block w-100" alt="Student">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('image/game.jpeg') }}" class="d-block w-100" alt="Game">
        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
@endsection
