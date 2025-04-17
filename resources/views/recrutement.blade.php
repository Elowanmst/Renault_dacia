@extends('layouts.app')

@section('content')

    <h1 class="titleRecru">Nous recrutons</h1>
    <p class="pRecru">Découvrez nos offres d'emploi :</p>
    <p>Une offre t'interresse ? contacte nous en precisant le poste qui t'interresse avec ton CV et t'as lettre de motivation</p>

    <div class="offers-container">
        @if ($jobOffers->isEmpty())
            <p>Aucune offre d'emploi disponible pour le moment.</p>
        @else
            <div class="job-offers">
                @foreach ($jobOffers as $jobOffer)
                    <div class="job-card">

                        <div class="job-card-header">
                            <h2>{{ $jobOffer->title }}</h2>
                            <p><strong>Status :</strong> {{ $jobOffer->status }}</p>
                            <p><strong>Posté le :</strong> {{ $jobOffer->posted_at }}</p>
                            <p><strong>Expire le :</strong> {{ $jobOffer->expires_at }}</p>
                            <button class="btn-show-details" onclick="toggleJobDetails({{ $jobOffer->id }}, true)">plus de details</button>
                            <button class="btn-hide-details" onclick="toggleJobDetails({{ $jobOffer->id }}, false)" style="display: none;">moins de détails</button>
                        </div>

                        <div class="job-card-details" id="job-details-{{ $jobOffer->id }}" style="display: none;">
                            <p><strong>Type de contrat :</strong> {{ $jobOffer->type }}</p>
                            <p><strong>Lieu :</strong> {{ $jobOffer->location }}</p>
                            <p><strong>Pré-requis :</strong> {{ $jobOffer->requirements }}</p>
                            <p><strong>Responsabilités :</strong> {{ $jobOffer->responsibilities }}</p>
                            <p><strong>Rémunération :</strong> {{ $jobOffer->salary }} €</p>
                            
                        </div>

                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <a href="{{ url()->previous() }}" class="btn-back">Retour</a>

    <button id="openModal" class="btn-primary">Contactez-nous</button>
    
@endsection

