@extends('layouts.admin')

@section('title', 'Garage Renault - Modifier les horaires d\'ouverture')

@section('styles')
    @vite(['resources/css/admin/horaires.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
<div class="main-content">

    <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>

    <h1>{{ __('edit opening hours') }}</h1>
    <form class="admin-form" action="{{ route('horaires.update', $horaires->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="day">{{ __('day') }}</label>
            <input type="text" class="form-control" id="day" name="day" value="{{ $horaires->day }}" required readonly>
        </div>
        <div class="form-group">
            <label for="morningO">{{ __('morningOpening') }}</label>
            <input type="time" class="form-control" id="morningO" name="morningO" value="{{ $horaires->morningO }}" required>
        </div>
        <div class="form-group">
            <label for="morningC">{{ __('morningClosing') }}</label>
            <input type="time" class="form-control" id="morningC" name="morningC" value="{{ $horaires->morningC }}" required>
        </div>
        <div class="form-group">
            <label for="afternoonO">{{ __('afternoonOpening') }}</label>
            <input type="time" class="form-control" id="afternoonO" name="afternoonO" value="{{ $horaires->afternoonO }}" required>
        </div>
        <div class="form-group">
            <label for="afternoonC">{{ __('afternoonClosing') }}</label>
            <input type="time" class="form-control" id="afternoonC" name="afternoonC" value="{{ $horaires->afternoonC }}" required>
        </div>
        
        

        <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
    </form>
</div>
@endsection

