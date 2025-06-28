@extends('layout')

@section('content')
    <h2 class="w3-text-red">Service List</h2>

    {{-- Flash success message --}}
    @if (session('success'))
        <div class="w3-panel w3-green w3-padding">
            {{ session('success') }}
        </div>
    @endif

    {{-- Link to create a new service --}}
    <a href="{{ route('services.create') }}" class="w3-button w3-green w3-margin-bottom">Add New Service</a>

    {{-- Check if services exist --}}
    @if ($services->count())
        <table class="w3-table-all w3-hoverable w3-card-4">
            <thead>
                <tr class="w3-light-grey">
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <a href="{{ route('services.edit', $service->id) }}" class="w3-button w3-blue w3-small">Edit</a>

                            <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w3-button w3-red w3-small" onclick="return confirm('Are you sure you want to delete this service?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="w3-text-grey">No services found.</p>
    @endif
@endsection
