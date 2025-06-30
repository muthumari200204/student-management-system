@extends('layout')

@section('content')
<h2>Subject and Assigned Teacher</h2>

<table class="w3-table-all w3-hoverable w3-margin-bottom">
    <thead>
        <tr class="w3-light-grey">
            <th>Subject</th>
            <th>Teacher</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subjectTeacherMap as $subject => $teacher)
        <tr>
            <td>{{ $subject }}</td>
            <td>{{ $teacher }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<h2>Teacher List</h2>

@if ($teachers->count())
<table class="w3-table-all w3-hoverable">
    <thead>
        <tr class="w3-light-grey">
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
        <tr>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->address }}</td>
            <td>{{ $teacher->mobile }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p class="w3-text-grey">No teachers found.</p>
@endif
@endsection
