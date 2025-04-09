@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/vehicle.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
    <div class="main-content">
        <a href="{{ route('vehicles.index') }}">{{ __('back') }}</a>

        <h1>{{ $vehicle->model }}</h1>
        <p>{{ __('brand') }}: {{ $vehicle->brand }}</p>
        <p>{{ __('year') }}: {{ $vehicle->year }}</p>
        <p>{{ __('price') }}: {{ $vehicle->price }} €</p>
        <p><small>{{ __('created at') }} {{ $vehicle->created_at->format('M d, Y') }}</small></p>

        <div>
            <a href="{{ route('vehicles.edit', $vehicle) }}">{{ __('edit') }}</a>
            <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">{{ __('delete') }}</button>
            </form>
        </div>
    </div>
@endsection