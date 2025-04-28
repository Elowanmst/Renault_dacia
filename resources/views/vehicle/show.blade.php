@extends('layouts.app')

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

    

    <div>
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
    
</div>

<a href="{{ route('index') }}#service" class="btn-back">Retour</a>

<button id="openModal" class="btn-primary">Contactez-nous</button>

<footer>
    <p>© 2025 - Garage du Centre RENAULT | DACIA  </p>
    <br>
    <p>created by ec-craft.fr  </p>
</footer>

@endsection