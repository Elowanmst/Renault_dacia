@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/horaires.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
<div class="main-content">

    <a href="{{ route('horaires.index') }}">{{ __('back') }}</a>
    
    <h1>{{ __('edit opening hours') }}</h1>
    <form action="{{ route('horaires.update', $horaires->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <h2>{{$horaires->day}}</h2>
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

