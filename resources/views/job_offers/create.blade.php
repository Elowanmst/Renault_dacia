@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css']) 
@endsection

@section('content')
    <div class="main-content">

        <a class="back-btn" href="{{ route('job_offers.index') }}">{{ __('back') }}</a>
        <h1>{{ __('Add new job offer') }}</h1>
        <form class="admin-form" class="admin-form" action="{{ route('job_offers.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">{{ __('Title') }}</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="description">{{ __('Description') }}</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="location">{{ __('Location') }}</label>
                <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                @error('location')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="salary">{{ __('Salary') }}</label>
                <input type="text" name="salary" class="form-control" value="{{ old('salary') }}">
                @error('salary')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">{{ __('Type') }}</label>
                <select name="type" class="form-control">
                    <option value="full_time" {{ old('type') == 'full_time' ? 'selected' : '' }}>{{ __('Full Time') }}</option>
                    <option value="part_time" {{ old('type') == 'part_time' ? 'selected' : '' }}>{{ __('Part Time') }}</option>
                    <option value="internship" {{ old('type') == 'internship' ? 'selected' : '' }}>{{ __('Internship') }}</option>
                    <option value="freelance" {{ old('type') == 'freelance' ? 'selected' : '' }}>{{ __('Freelance') }}</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">{{ __('Status') }}</label>
                <input type="text" name="status" class="form-control" value="{{ old('status') }}">
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="requirements">{{ __('Requirements') }}</label>
                <textarea name="requirements" class="form-control" rows="5">{{ old('requirements') }}</textarea>
                @error('requirements')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="responsibilities">{{ __('Responsibilities') }}</label>
                <textarea name="responsibilities" class="form-control" rows="5">{{ old('responsibilities') }}</textarea>
                @error('responsibilities')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-form">{{ __('create') }}</button>
        </form>
    </div>
@endsection
