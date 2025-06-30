<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Management</title>

    <!-- W3.CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-red" style="width:25%">
        <h3 class="w3-bar-item">Dashboard</h3>

        <a href="{{ route('home') }}" class="w3-bar-item w3-button">🏠 Home</a>
        <a href="{{ route('students.index') }}" class="w3-bar-item w3-button">👨‍🎓 Students</a>
        <a href="{{ route('courses.index') }}" class="w3-bar-item w3-button">📚 Courses</a>
        <a href="{{ route('teachers.index') }}" class="w3-bar-item w3-button">👩‍🏫 Teachers</a>
        <a href="{{ route('services.index') }}" class="w3-bar-item w3-button">🛠️ Services</a>
         <a href="{{ route('exams.index') }}" class="w3-bar-item w3-button">📝 Exams</a>
        @auth
            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST" class="w3-bar-item">
                @csrf
                <button type="submit" class="w3-button w3-block w3-red text-white">🚪 Logout</button>
            </form>
        @endauth
    </div>

    <!-- Main Content -->
    <div style="margin-left:25%; padding:20px;">
        @if (session('success'))
            <div class="w3-panel w3-green w3-padding">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
