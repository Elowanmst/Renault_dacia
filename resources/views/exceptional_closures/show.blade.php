@extends('layouts.admin')

@section('title', 'Garage Renault - Fermeture exceptionnelle')

@section('styles')
    @vite(['resources/css/admin/vehicle.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
    <div class="main-content">
        <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>

        <h1>Fermeture du </h1>
        <p>{{ __('Start date') }}: {{ $exceptionalClosure->start_date }}</p>
        <p>{{ __('year') }}: {{ $exceptionalClosure->year }}</p>
        <p>{{ __('price') }}: {{ $exceptionalClosure->price }} €</p>

        <div>
            <a href="{{ route('exceptional-closures.edit', $exceptionalClosure) }}">{{ __('edit') }}</a>
            <form action="{{ route('exceptional-closures.destroy', $exceptionalClosure) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button class="btn-delete" type="submit">{{ __('delete') }}</button>
            </form>
        </div>
    </div>
@endsection