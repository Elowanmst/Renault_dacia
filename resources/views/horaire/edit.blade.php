@extends('layouts.admin')

@section('content')
<div class="horaires-container">
    <h1>{{ __('edit service') }}</h1>
    <form action="{{ route('horaires.update', $horaires->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="day">{{ __('day') }}</label>
            <input type="text" class="form-control" id="day" name="day" value="{{ $horaires->day }}" required>
        </div>
        <div class="form-group">
            <label for="morningO">{{ __('morning opening') }}</label>
            <input type="time" class="form-control" id="morningO" name="morningO" value="{{ $horaires->morningO }}" required>
        </div>
        <div class="form-group">
            <label for="morningC">{{ __('morning closing') }}</label>
            <input type="time" class="form-control" id="morningC" name="morningC" value="{{ $horaires->morningC }}" required>
        </div>
        <div class="form-group">
            <label for="afternoonO">{{ __('afternoon opening') }}</label>
            <input type="time" class="form-control" id="afternoonO" name="afternoonO" value="{{ $horaires->afternoonO }}" required>
        </div>
        <div class="form-group">
            <label for="afternoonC">{{ __('afternoon closing') }}</label>
            <input type="time" class="form-control" id="afternoonC" name="afternoonC" value="{{ $horaires->afternoonC }}" required>
        </div>
        
        

        <button type="submit" class="btn btn-primary">{{ __('update horaire') }}</button>
    </form>
</div>
@endsection

