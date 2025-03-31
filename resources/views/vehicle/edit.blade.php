@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ __('edit vehicle') }}</h1>
    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
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

        <button type="submit" class="btn btn-primary">{{ __('update vehicle') }}</button>
    </form>
</div>
@endsection