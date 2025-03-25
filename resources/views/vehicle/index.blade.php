@extends('layouts.app')

@section('content')
    <div class="container bg-slate-50 mx-auto p-4">

        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" href="/vehicles/create">
            Ajouter un véhicule
        </a>

        <h1>Véhicules</h1>

        <ul class="list-none p-0 m-0 mt-4 space-y-4 bg-slate-100 rounded-full">
            @foreach ($vehicles as $vehicle)
                <h2 class="text-xl">
                    <a href="{{ route('vehicles.show', $vehicle) }}">{{ $vehicle->model }}</a>
                </h2>
                <p>Marque : {{ $vehicle->brand }}</p>
                <p>Année : {{ $vehicle->year }}</p>
                <p>Prix : {{ $vehicle->price }} €</p>
{{-- 
                @if ($image = $vehicle->getFirstMedia())
                    <img src="{{ $image->getUrl() }}" alt="Image du véhicule" class="w-32 h-32 object-cover">
                @endif --}}
                <br>
            @endforeach
        </ul>

        {{ $vehicles->links() }}
    </div>

@endsection
