@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('vehicles.index') }}">Back to vehicles</a>

        <h1>{{ $vehicle->model }}</h1>
        <p>Brand: {{ $vehicle->brand }}</p>
        <p>Year: {{ $vehicle->year }}</p>
        <p>Price: {{ $vehicle->price }} €</p>
        <p><small>Added on {{ $vehicle->created_at->format('M d, Y') }}</small></p>

        <div>
            <a href="{{ route('vehicles.edit', $vehicle) }}">Edit</a>
            <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection