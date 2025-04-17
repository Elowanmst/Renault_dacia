@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/vehicle.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')

<div class="main-content">

    <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>

    <h1>{{ __('edit vehicle') }}</h1>
    <form class="admin-form" action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="brand">{{ __('brand') }}</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $vehicle->brand }}" required>
        </div>

        <div class="form-group">
            <label for="model">{{ __('model') }}</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ $vehicle->model }}" required>
        </div>

        <div class="form-group">
            <label for="year">{{ __('year') }}</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $vehicle->year }}" required>
        </div>

        <div class="form-group">
            <label for="price">{{ __('price') }}</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $vehicle->price }}" required>
        </div>

        <div class="form-group">
            <label for="picture">{{ __('picture') }}</label>
            <input type="file" class="form-control" id="picture" name="picture" value="{{ $vehicle->picture }}" required>
        </div>

        <div class="form-group">
            <label for="fuel">{{ __('fuel') }}</label>
            <input type="text" class="form-control" id="fuel" name="fuel" value="{{ $vehicle->picture }}" required>
        </div>

        <div class="form-group">
            <label for="description">{{ __('description') }}</label>
            <input type="textarea" class="form-control" id="description" name="description" value="{{ $vehicle->picture }}" required>
        </div>

        <div class="form-group">
            <label for="mileage">{{ __('mileage') }}</label>
            <input type="number" class="form-control" id="mileage" name="mileage" value="{{ $vehicle->picture }}" required>
        </div>

        <div class="form-group">
            <label for="transmission">{{ __('transmission') }}</label>
            <input type="text" class="form-control" id="transmission" name="transmission" value="{{ $vehicle->picture }}" required>
        </div>

        <div class="form-group">
            <label for="puissance">{{ __('puissance') }}</label>
            <input type="text" class="form-control" id="puissance" name="puissance" value="{{ $vehicle->picture }}" required>
        </div>

        <div class="form-group">
            <label for="puissance">{{ __('puissance') }}</label>
            <input type="text" class="form-control" id="puissance" name="puissance" value="{{ $vehicle->picture }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('update vehicle') }}</button>
    </form>
</div>
@endsection


