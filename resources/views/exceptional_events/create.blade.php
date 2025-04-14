@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css']) 
@endsection

@section('content')

    <div class="main-content">

        <div class="container">

            <a href="{{ route('exceptional-events.index') }}">{{ __('back') }}</a>

            <h1>{{ __('Add exceptional event') }}</h1>
            <form action="{{ route('exceptional-events.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <input type="text" name="name" class="form-control" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="start_date">{{ __('Start date') }}</label>
                    <input type="date" name="start_date" class="form-control" required >
                    @error('start_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="end_date">{{ __('End date') }}</label>
                    <input type="date" name="end_date" class="form-control" required>
                    @error('end_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">{{ __('description') }}</label>
                    <input type="text" name="description" class="form-control" >
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
            </form>
        </div>
    </div>
    
@endsection
