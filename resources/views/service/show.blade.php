@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/service.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
    <div class="main-content">
        <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>

        <h1>{{ $services->model }}</h1>
        <p>{{ __('name') }}: {{ $services->name }}</p>
        <p>{{ __('description') }}: {{ $services->description }}</p>
        @if ($services->getFirstMediaUrl('services', 'grayscale-large'))
            <img src="{{ $services->getFirstMediaUrl('services', 'grayscale-large') }}" alt="{{ $services->brand }} {{ $services->model }}">
        @else
            <p>{{ __('No image available') }}</p>
        @endif

        <div>
            <a href="{{ route('services.edit', $services) }}">{{ __('edit') }}</a>
            <form action="{{ route('services.destroy', $services) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button class="btn-delete" type="submit">{{ __('delete') }}</button>
            </form>
        </div>
    </div>
@endsection