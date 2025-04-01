@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/vehicles.css'])
    {{-- @vite(['resources/css/admin/dashboard.css']) --}}
@endsection

@section('content')
    <div class="container">
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
            <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
        </form>
    </div>
@endsection
