@extends('layouts.admin')

@section('styles')
@vite(['resources/css/admin/vehicle.css'])
@vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')

<div class="main-content">
    
    <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>
    
    <h1>{{ __('edit vehicle') }}</h1>
    <form class="admin-form" action="{{ route('vehicles.update', $vehicle->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="brand">{{ __('brand') }}</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $vehicle->brand) }}" required>
            @error('brand')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="model">{{ __('model') }}</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ old('model', $vehicle->model) }}" required>
            @error('model')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="year">{{ __('year') }}</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ old('year', $vehicle->year) }}" required>
            @error('year')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="price">{{ __('price') }}</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $vehicle->price) }}" required>
            @error('price')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="picture">{{ __('picture') }}</label>

            @if ($vehicle->getFirstMediaUrl('vehicles', 'thumb'))
            <img src="{{ $vehicle->getFirstMediaUrl('vehicles', 'thumb') }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}">
            @else
            <p>{{ __('No image available') }}</p>
            @endif
            
            <p>{{ __('Edit picture') }}</p>
            <input type="file" class="form-control" id="picture" name="picture">
            @error('picture')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="fuel">{{ __('fuel') }}</label>
            <select name="fuel" id="fuel" class="form-control" required>
                <option value="" disabled>{{ __('Choose fuel') }}</option>
                <option value="gasoline" {{ $vehicle->fuel == 'gasoline' ? 'selected' : '' }}>{{ __('Gasoline') }}</option>
                <option value="diesel" {{ $vehicle->fuel == 'diesel' ? 'selected' : '' }}>{{ __('Diesel') }}</option>
                <option value="electric" {{ $vehicle->fuel == 'electric' ? 'selected' : '' }}>{{ __('Electric') }}</option>
                <option value="hybrid" {{ $vehicle->fuel == 'hybrid' ? 'selected' : '' }}>{{ __('Hybrid') }}</option>
            </select>
            @error('fuel')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="description">{{ __('description') }}</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description', $vehicle->description) }}</textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="type">{{ __('type') }}</label>
            <select class="form-control" id="type" name="type" required>
                <option value="" disabled>{{ __('Choose Type') }}</option>
                <option value="new" {{ old('type', $vehicle->type) == 'new' ? 'selected' : '' }}>{{ __('New') }}</option>
                <option value="used" {{ old('type', $vehicle->type) == 'used' ? 'selected' : '' }}>{{ __('Used') }}</option>
            </select>
            @error('type')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="mileage">{{ __('mileage') }}</label>
            <input type="number" class="form-control" id="mileage" name="mileage" value="{{ old('mileage', $vehicle->mileage) }}" required>
            @error('mileage')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="transmission">{{ __('transmission') }}</label>
            <input type="text" class="form-control" id="transmission" name="transmission" value="{{ old('transmission', $vehicle->transmission) }}" required>
            @error('transmission')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="puissance">{{ __('puissance') }}</label>
            <input type="text" class="form-control" id="puissance" name="puissance" value="{{ old('puissance', $vehicle->puissance) }}" required>
            @error('puissance')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        
        
        <button type="submit" class="btn btn-primary">{{ __('update vehicle') }}</button>
    </form>
</div>
@endsection
