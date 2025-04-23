@extends('layouts.admin')

@section('styles')
    @vite('resources/css/admin/dashboard.css')
@endsection

@section('content')

    <div class="main-content">

        <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>

        <h1>{{ $vehicle->model }}</h1>
        <p>{{ __('brand') }}: {{ $vehicle->brand }}</p>
        <p>{{ __('year') }}: {{ $vehicle->year }}</p>
        <p>{{ __('price') }}: {{ $vehicle->price }} €</p>
        @if ($vehicle->getFirstMediaUrl('vehicles', 'thumb'))
            <img src="{{ $vehicle->getFirstMediaUrl('vehicles', 'thumb') }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}">
        @else
            <p>{{ __('No image available') }}</p>
        @endif
        <p><small>{{ __('created at') }} {{ $vehicle->created_at->format('M d, Y') }}</small></p>

        <div>
            <a href="{{ route('vehicles.edit', $vehicle) }}">{{ __('edit') }}</a>
            <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn-delete" type="submit">{{ __('delete') }}</button>
            </form>
        </div>
    </div>

@endsection