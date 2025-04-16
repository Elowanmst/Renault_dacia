@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')


<div class="main-content">

    <h1>{{ __('Dashboard') }}</h1>

    <div class="stats-container"> 

        <div class="card stat">
            <h2 onclick="window.location='{{ route('vehicles.index') }}'" style="cursor: pointer;">{{ __('My vehicles') }}</h2>
            <p>{{ $vehiclesCount }}</p>
        </div>


        <div class="card stat">
            <h2 onclick="window.location='{{ route('services.index') }}'" style="cursor: pointer;">{{ __('My services') }}</h2>
            <p>{{ $servicesCount }}</p>
        </div>

        <div class="card stat">
            <h2 onclick="window.location='{{ route('users.index') }}'" style="cursor: pointer;">{{ __('Users') }}</h2>
            <p>{{ $usersCount }}</p>
        </div>

        {{-- Fermeture exceptionelle --}}
        <div class="card">
            <h2 onclick="window.location='{{ route('exceptional-closures.index') }}'" style="cursor: pointer;">{{ __('Exceptional closures') }}</h2>
            @foreach ($exceptionalClosures as $exceptionalClosure)
                <p> Fermeture prévue du {{ $exceptionalClosure->start_date->format('d/m/Y') }} au {{ $exceptionalClosure->end_date->format('d/m/Y') }} : {{ $exceptionalClosure->reason}}</p>
            @endforeach
        </div>


        {{-- evenements --}}
        <div class="card">
            <h2 onclick="window.location='{{ route('exceptional-events.index') }}'" style="cursor: pointer;">{{ __('Exceptional events') }}</h2>
            @foreach ($exceptionalEvents as $exceptionalEvent)
                <p> {{ $exceptionalEvent->name }} : Evènement prévu le {{ $exceptionalEvent->start_date->format('d/m/Y') }} : {{ $exceptionalEvent->reason}}</p>
            @endforeach
        </div>

        {{-- Notre équipe --}}
        <div class="card">
            <h2 onclick="window.location='{{ route('team_members.index') }}'" style="cursor: pointer;">{{ __('Our team') }}</h2>
            @foreach ($teamMembers as $teamMember)
                <p> {{ $teamMember->name }} : {{ $teamMember->role }}</p>
            @endforeach
        </div>

        {{-- recrutement --}}
    </div>

</div>

@endsection
