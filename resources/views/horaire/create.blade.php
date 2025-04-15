@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/horaire.css'])
    @vite(['resources/css/admin/dashboard.css']) 
@endsection

@section('content')
    <div class="main-content">

        <a class="back-button" href="{{ route('horaires.index') }}">{{ __('back') }}</a>

        <h1>{{ __('Add opening hours') }}</h1>
        <form class="create-form" action="{{ route('horaires.store') }}" method="post">
            @csrf
            <div class="form-group">
                {{-- <label for="day">{{ __('day') }}</label>
                <input type="text" name="day" class="form-control" > --}}

                <label for="day">{{ __('day') }}</label>
                <select name="day" class="form-control" required>
                    <option value="">{{ __('selectDay') }}</option>
                    <option value="lundi">{{ __('monday') }}</option>
                    <option value="mardi">{{ __('tuesday') }}</option>
                    <option value="mercredi">{{ __('wednesday') }}</option>
                    <option value="jeudi">{{ __('thursday') }}</option>
                    <option value="vendredi">{{ __('friday') }}</option>
                    <option value="samedi">{{ __('saturday') }}</option>
                    <option value="dimanche">{{ __('sunday') }}</option>
                </select>
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

