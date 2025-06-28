@extends('layout')

@section('content')
    <h2 class="w3-text-red">Edit Service</h2>

    @if ($errors->any())
        <div class="w3-panel w3-red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('services.update', $service->id) }}" method="POST" class="w3-container w3-card-4 w3-padding">
        @csrf
        @method('PUT')

        <label class="w3-text-black"><b>Service Name</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" name="name" value="{{ old('name', $service->name) }}" required>

        <label class="w3-text-black"><b>Description</b></label>
        <textarea class="w3-input w3-border w3-margin-bottom" name="description" required>{{ old('description', $service->description) }}</textarea>

        <button type="submit" class="w3-button w3-blue">Update</button>
        <a href="{{ route('services.index') }}" class="w3-button w3-gray">Cancel</a>
    </form>
@endsection
