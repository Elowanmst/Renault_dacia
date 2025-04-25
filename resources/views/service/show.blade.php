@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/service.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
    <div class="main-content">

        <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>

        <div class="admin-show">
            <h1>{{ $services->name }}</h1>
            <p><i class="fas fa-align-left"></i>{{ $services->description }}</p>
            @if ($services->getFirstMediaUrl('services', 'grayscale-large'))
                <img src="{{ $services->getFirstMediaUrl('services', 'grayscale-large') }}" alt="{{ $services->brand }} {{ $services->model }}">
            @else
                <p><i class="fas fa-image"></i>{{ __('No image available') }}</p>
            @endif

            <div class="btn-show">
                <a class="btn-edit" href="{{ route('services.edit', $services) }}"><i class="fas fa-pen"></i>{{ __('edit') }}</a>
                <form action="{{ route('services.destroy', $services) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete" type="submit"><i class="fas fa-trash"></i>{{ __('delete') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection