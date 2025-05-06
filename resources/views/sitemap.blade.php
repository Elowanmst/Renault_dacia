@extends('layouts.app')

@section('title', 'Garage Renault - Plan du site')

@section('styles')
    @vite(['resources/css/sitemap.css'])
@endsection
 
@section('content')
<div class="container">
    <h1 class="sitemap-title">{{ __('Plan du site') }}</h1>
    <ul class="sitemap-list">
        <!-- Lien vers la page d'accueil -->
        <li>
            <a href="{{ url('/') }}">{{ __('Accueil') }}</a>
        </li>

        <!-- Section des véhicules -->
        <li>
            <a href="{{ url('/vehicles') }}">{{ __('Véhicules') }}</a>
            <ul class="sitemap-sublist">
                @foreach ($vehicles as $vehicle)
                    <li>
                        <a href="{{ url('/vehicles/' . $vehicle->id) }}">
                            {{ $vehicle->brand }} {{ $vehicle->model }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>

        <!-- Section des offres d'emploi -->
        <li>
            <a href="{{ url('/recrutement') }}">{{ __('Recrutement') }}</a>
            <ul class="sitemap-sublist">
                @foreach ($jobOffers as $jobOffer)
                    <li>
                        <a href="{{ url('/job_offers/' . $jobOffer->id) }}">
                            {{ $jobOffer->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>

        <!-- Autres sections -->
        <li>
            <a href="{{ url('/services') }}">{{ __('Services') }}</a>
        </li>
        <li>
            <a href="{{ url('/contact') }}">{{ __('Contact') }}</a>
        </li>
        <li>
            <a href="{{ url('/about') }}">{{ __('À propos') }}</a>
        </li>
    </ul>
</div>
@endsection