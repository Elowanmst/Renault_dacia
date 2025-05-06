@extends('layouts.app')

@section('title', 'Garage Renault - Détails du véhicule')

@section('content')

<div class="vehicle-container">
    
    {{-- <div class="vehicleImg">
        @if ($vehicle->getFirstMediaUrl('vehicles', 'show'))
            <img src="{{ $vehicle->getFirstMediaUrl('vehicles', 'show') }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}">
        @else
            <p>{{ __('No image available') }}</p>
        @endif
    </div> --}}
    <div class="carousel-container-show">
        <button class="prev-show">❮</button>
            <div class="carousel-show">
                @foreach ($vehicle->getMedia('vehicles') as $media)
                    <img src="{{ $media->getUrl('carousel') }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}" class="vehicle-image-show">
                @endforeach
            </div>
        <button class="next-show">❯</button>
    </div>


    <h1>{{ $vehicle->model }}</h1>
    <div class="vehicleInfo">
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
    </div>

    
    

    {{-- <div>
        <h1 class="">{{ $vehicle->brand }} {{ $vehicle->model }}</h1>
        <h3>{{ $vehicle->price }} €</h3>
    </div>

    <div class="vehicleInfo">

        <h2>{{ __('Caracteristiques') }}</h2>
        <p>{{ $vehicle->brand }} {{ $vehicle->model }}</p>
        
        <p>{{ __('brand') }}: {{ $vehicle->brand }}</p>
        <p>{{ __('model') }}: {{ $vehicle->model }}</p>
        <p>{{ __('year') }}: {{ $vehicle->year }}</p>
        <p>{{ __('price') }}: {{ $vehicle->price }} €</p>
        
        <p><small>{{ __('Added at') }} {{ $vehicle->created_at->format('M d, Y') }}</small></p>
    </div>
     --}}
</div>

<a href="{{ route('index') }}#service" class="btn-back">Retour</a>

<button id="openModal" class="btn-primary">Contactez-nous</button>

<footer>
    <p>© 2025 - Garage du Centre RENAULT | DACIA  </p>
    <br>
    <p>created by ec-craft.fr  </p>
</footer>

@endsection