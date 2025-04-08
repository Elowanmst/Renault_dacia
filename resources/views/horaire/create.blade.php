@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/horaire.css'])
    {{-- @vite(['resources/css/admin/dashboard.css'])  --}}
@endsection

@section('content')
    <div class="horaires-container">
        <h1>{{ __('Add opening hours') }}</h1>
        <form action="{{ route('horaires.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="day">{{ __('day') }}</label>
                <input type="text" name="day" class="form-control" >
            </div>
            <div class="form-group">
                <label for="morning-opening">{{ __('morningOpening') }}</label>
                <input type="time" name="morningO" class="form-control" >
            </div>
            <div class="form-group">
                <label for="morning-closing">{{ __('morningClosing') }}</label>
                <input type="time" name="morningC" class="form-control" >
            </div>
            <div class="form-group">
                <label for="afternoon-opening">{{ __('afternoonOpening') }}</label>
                <input type="time" name="afternoonO" class="form-control" >
            </div>
            <div class="form-group">
                <label for="afternoon-closing">{{ __('afternoonClosing') }}</label>
                <input type="time" name="afternoonC" class="form-control" >
            </div>
            
           
            <button type="submit" class="btn btn-primary">{{ __('add') }}</button>
        </form>
    </div>
@endsection

