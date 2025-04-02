@extends('layouts.admin')

@section('content')
<div class="service-container">
    <h1>{{ __('edit service') }}</h1>
    <form action="{{ route('services.update', $vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">{{ __('name') }}</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $services->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">{{ __('description') }}</label>
            <input type="textarea" class="form-control" id="description" name="description" value="{{ $vehicle->picture }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('update services') }}</button>
    </form>
</div>
@endsection


