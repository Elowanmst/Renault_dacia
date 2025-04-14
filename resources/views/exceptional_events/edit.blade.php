@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/vehicle.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
<div class="main-content">

    <a href="{{ route('exceptional-events.index') }}">{{ __('back') }}</a>

    <h1>{{ __('Edit exceptional event') }}</h1>
    <form action="{{ route('exceptional-events.update', $exceptionalEvent->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $exceptionalEvent->name }}" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $exceptionalEvent->description }}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        
        <div class="form-group">
            <label for="start_date">{{ __('Start date') }}</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $exceptionalEvent->start_date->format('Y-m-d') }}" required>
            @error('start_date')
                <div class="alert alert-danger">{{ $message }}</div>                
            @enderror
        </div>

        <div class="form-group">
            <label for="end_date">{{ __('End date') }}</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $exceptionalEvent->end_date->format('Y-m-d') }}" required>
            @error('end_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn">{{ __('Update exceptional event') }}</button>
    </form>
</div>
@endsection


