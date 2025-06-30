@extends('layout')

@section('content')
<h1>Services</h1>



<!-- Example static success message -->
<div class="alert alert-success">Service created successfully.</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Static row 1 -->
        <tr>
            <td>1</td>
            <td>Library Access</td>
            <td>Provides full access to the digital and physical library resources.</td>
            <td>
                <a href="#" class="btn btn-info btn-sm">View</a>
                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </td>
        </tr>

        <!-- Static row 2 -->
        <tr>
            <td>2</td>
            <td>Online Classes</td>
            <td>Access to recorded and live-streamed lectures for all courses.</td>
            <td>
                <a href="#" class="btn btn-info btn-sm">View</a>
                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </td>
        </tr>

        <!-- Static row 3 -->
        <tr>
            <td>3</td>
            <td>Career Counseling</td>
            <td>Guidance sessions for career planning and internships.</td>
            <td>
                <a href="#" class="btn btn-info btn-sm">View</a>
                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection
