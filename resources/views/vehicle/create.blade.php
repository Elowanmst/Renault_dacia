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
            <input type="text" name="brand" class="form-control" value="{{ old('brand') }}" required>
            @error('brand')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="model">{{ __('model') }}</label>
            <input type="text" name="model" class="form-control" value="{{ old('model') }}"required>
            @error('model')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="year">{{ __('year') }}</label>
            <input type="number" name="year" class="form-control" value="{{ old('year') }}"required>
            @error('year')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">{{ __('price') }}</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="puissance">{{ __('horsepower') }}</label>
            <input type="number" name="puissance" class="form-control" value="{{ old('puissance') }}">
            @error('puissance')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="fuel">{{ __('fuel') }}</label>
            <select name="fuel" id="fuel" class="form-control" required>
                <option value="gasoline" {{ old('fuel') == 'gasoline' ? 'selected' : '' }}>{{ __('Gasoline') }}</option>
                <option value="diesel" {{ old('fuel') == 'diesel' ? 'selected' : '' }}>{{ __('Diesel') }}</option>
                <option value="electric" {{ old('fuel') == 'electric' ? 'selected' : '' }}>{{ __('Electric') }}</option>
                <option value="hybrid" {{ old('fuel') == 'hybrid' ? 'selected' : '' }}>{{ __('Hybrid') }}</option>
            </select>
            @error('fuel')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="transmission">{{ __('Transmission') }}</label>
            <select name="transmission" id="transmission" class="form-control" required>
                <option value="automatic" {{ old('transmission') == 'automatic' ? 'selected' : '' }}>{{ __('Automatic') }}</option>
                <option value="manual" {{ old('transmission') == 'manual' ? 'selected' : '' }}>{{ __('Manual') }}</option>
            </select>
            @error('transmission')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">{{ __('type') }}</label>
            <select name="type" id="type" class="form-control" required>
                <option value="new" {{ old('type') == 'new' ? 'selected' : '' }}>{{ __('New') }}</option>
                <option value="used" {{ old('type') == 'used' ? 'selected' : '' }}>{{ __('Used') }}</option>
            </select>
            @error('type')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="mileage">{{ __('mileage') }}</label>
            <input type="number" name="mileage" class="form-control" value="{{ old('mileage') }}" required>
            @error('mileage')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">{{ __('description') }}</label>
            <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="pictures">{{ __('pictures') }}</label>
            <input type="file" name="pictures[]" class="form-control" multiple required>
            @error('pictures.*')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="info-icon">
                <i class="fas fa-info-circle"></i>
                <div class="tooltip">
                    <p>Formats acceptés : JPEG, PNG, JPG, GIF, SVG. Taille maximale : <strong>5 Mo.</strong> <br> Image au format <strong>paysage</strong> recommandée.</p>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
    </form>
</div>

@endsection
