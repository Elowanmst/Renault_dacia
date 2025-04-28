@extends('layouts.admin')

@section('styles')
@vite(['resources/css/admin/dashboard.css']) 
@endsection

@section('content')

<div class="main-content">
    
    
    
    <a class="back-btn" href="{{ route('vehicles.index') }}">{{ __('back') }}</a>
    
    <h1>{{ __('add vehicle') }}</h1>
    <form class="admin-form" action="{{ route('vehicles.store') }}" method="post" enctype="multipart/form-data">
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
            <label for="price">{{ __('price') }}</label>
            <input type="number" name="price" class="form-control" >
        </div>
        <div class="form-group">
            <label for="puissance">{{ __('horsepower') }}</label>
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
            <label for="transmission">{{ __('Transmission') }}</label>
            <select name="transmission" id="transmission" class="form-control">
                <option value="automatic">{{ __('Automatic') }}</option>
                <option value="manual">{{ __('Manual') }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="type">{{ __('type') }}</label>
            <select name="type" id="type" class="form-control">
                <option value="new">{{ __('New') }}</option>
                <option value="used">{{ __('Used') }}</option>
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
        {{-- <div class="form-group">
            <label for="picture">Image</label>
            <input type="file" name="picture[]" id="picture" class="form-control" accept="image/*" multiple>
        </div> --}}
        <div class="form-group">
            <label for="pictures">{{ __('pictures') }}</label>
            <input type="file" name="pictures[]" class="form-control" multiple>
            @error('pictures.*')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
    </form>
</div>

@endsection
