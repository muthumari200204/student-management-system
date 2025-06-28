<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-sidebar w3-bar-block w3-red" style="width:25%">
        <a href="{{ route('students.index') }}" class="w3-bar-item w3-button">Students</a>
        <a href="{{ route('students.create') }}" class="w3-bar-item w3-button">Add Student</a>
        <a href="{{ route('teachers.index') }}" class="w3-bar-item w3-button">Teachers</a>
        <a href="{{ route('services.index') }}" class="w3-bar-item w3-button">Services</a>
    </div>
    <div style="margin-left:25%;padding:20px;">
        @if (session('success'))
            <div class="w3-panel w3-green">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>
</body>
</html>
