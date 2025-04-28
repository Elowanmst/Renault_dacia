@extends('layouts.admin')

@section('styles')
@vite('resources/css/admin/dashboard.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection

@section('content')

<div class="main-content">
    <a class="back-btn" href="{{ url()->previous() }}"><i class="fas fa-arrow-left"></i> {{ __('back') }}</a>
    
    <div class="admin-show">
        {{-- @if ($vehicle->getFirstMediaUrl('vehicles', 'thumb'))
        <img class="img-show" src="{{ $vehicle->getFirstMediaUrl('vehicles', 'thumb') }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}">
        @else
        <p><i class="fas fa-image"></i> {{ __('No image available') }}</p>
        @endif --}}
        
        @if ($vehicle->getMedia('vehicles')->isNotEmpty())
        <div class="carousel-container-detail">
            <button class="prev-detail">❮</button>
                <div class="carousel-detail">
                    @foreach ($vehicle->getMedia('vehicles') as $media)
                        <img src="{{ $media->getUrl('admin-show') }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}" class="vehicle-image-detail">
                    @endforeach
                </div>
            <button class="next-detail">❯</button>
        </div>
        @else
        <p><i class="fas fa-image"></i>{{ __('No image available') }}</p>
        @endif
        
        <h1>{{ $vehicle->model }}</h1>
        <div class="flex">
            <div class="vehicle-info">
                @if (!empty($vehicle->brand))
                <p><i class="fas fa-industry"></i> {{ $vehicle->brand }}</p>
                @endif
                @if (!empty($vehicle->year))
                <p><i class="fas fa-calendar-alt"></i> {{ $vehicle->year }}</p>
                @endif
                @if (!empty($vehicle->price))
                <p><i class="fas fa-euro-sign"></i> {{ $vehicle->price }} €</p>
                @endif
            </div>
            <div class="vehicle-info">
                @if (!empty($vehicle->mileage))
                <p><i class="fas fa-road"></i> {{ $vehicle->mileage }} km</p>
                @endif
                @if (!empty($vehicle->fuel))
                <p><i class="fas fa-gas-pump"></i> {{ $vehicle->fuel }}</p>
                @endif
                @if (!empty($vehicle->transmission))
                <p><i class="fas fa-cogs"></i> {{ $vehicle->transmission }}</p>
                @endif
            </div>
        </div>
        @if (!empty($vehicle->description))
        <p><i class="fas fa-align-left"></i> {{ $vehicle->description }}</p>
        @endif
        
        <p><small><i class="fas fa-clock"></i> {{ __('created at') }} {{ $vehicle->created_at->format('M d, Y') }}</small></p>
        
        <div class="btn-show">
            <a class="btn-edit" href="{{ route('vehicles.edit', $vehicle) }}">
                <i class="fas fa-pen"></i> {{ __('edit') }}
            </a>
            <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn-delete" type="submit"><i class="fas fa-trash"></i> {{ __('delete') }}</button>
            </form>
        </div>
    </div>
</div>

@endsection
