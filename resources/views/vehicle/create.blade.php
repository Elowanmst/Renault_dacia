@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/vehicles.css'])
    @vite(['resources/css/admin/dashboard.css']) 
@endsection

@section('content')
    <div class="vehicle-container">
        <h1>{{ __('add vehicle') }}</h1>
        <form action="{{ route('vehicles.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="brand">{{ __('brand') }}</label>
                <input type="text" name="brand" class="form-control" >
            </div>
            <div class="form-group">
                <label for="model">{{ __('model') }}</label>
                <input type="text" name="model" class="form-control" >
            </div>
            <div class="form-group">
                <label for="year">{{ __('year') }}</label>
                <input type="number" name="year" class="form-control" >
            </div>
            <div class="form-group">
                <label for="color">{{ __('color') }}</label>
                <input type="text" name="color" class="form-control" >
            </div>
            <div class="form-group">
                <label for="price">{{ __('price') }}</label>
                <input type="number" name="price" class="form-control" >
            </div>
            <div class="form-group">
                <label for="license_plate">{{ __('license plate') }}</label>
                <input type="text" name="license_plate" class="form-control" >
            </div>
            <div class="form-group">
                <label for="puissance">{{ __('puissance') }}</label>
                <input type="number" name="puissance" class="form-control" >
            </div>
            <div class="form-group">
                <label for="fuel">{{ __('fuel') }}</label>
                <select name="fuel" id="fuel" class="form-control">
                    <option value="gasoline">{{ __('Gasoline') }}</option>
                    <option value="diesel">{{ __('Diesel') }}</option>
                    <option value="electric">{{ __('Electric') }}</option>
                    <option value="hybrid">{{ __('Hybrid') }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="transmission">{{ __('transmission') }}</label>
                <select name="transmission" id="transmission" class="form-control">
                    <option value="gasoline">{{ __('Automatique') }}</option>
                    <option value="diesel">{{ __('Manuelle') }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="type">{{ __('type') }}</label>
                <select name="type" id="type" class="form-control">
                    <option value="gasoline">{{ __('new') }}</option>
                    <option value="diesel">{{ __('used') }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mileage">{{ __('mileage') }}</label>
                <input type="number" name="mileage" class="form-control" >
            </div>
            
            <div class="form-group">
                <label for="description">{{ __('description') }}</label>
                <textarea name="description" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
        </form>
    </div>
@endsection
