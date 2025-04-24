@extends('layouts.admin')

@section('styles')
@vite(['resources/css/admin/dashboard.css']) 
@endsection

@section('content')

<div class="main-content">
    
    <a class="back-btn" href="{{ route('team_members.index') }}">{{ __('back') }}</a>
    
    <h1>{{ __('Add new team member') }}</h1>
    <form class="admin-form" action="{{ route('team_members.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="role">{{ __('Role') }}</label>
            <select name="role" id="role" class="form-control">
                <option value="">{{ __('Select Role') }}</option>
                <option value="director">{{ __('Directeur/trice') }}</option>
                <option value="mechanic">{{ __('Mécanicien') }}</option>
                <option value="chief_mechanic">{{ __('Chef Mécanicien') }}</option>
                <option value="sales">{{ __('Commercial') }}</option>
                <option value="customer_relations">{{ __('Relation Client') }}</option>
            </select>
            @error('role')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- <div class="form-group">
            <label for="role">{{ __('Role') }}</label>
            <input type="text" name="role" class="form-control" value="{{ old('role') }}">
            @error('role')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> --}}

        <div class="form-group">
            <label for="bio">{{ __('Bio') }}</label>
            <input type="text" name="bio" class="form-control" value="{{ old('bio') }}">
            @error('bio')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="profile_picture">{{ __('Photo') }}</label>
            <input type="file" name="profile_picture" class="form-control">
            @error('profile_picture')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
    </form>
    
</div>

@endsection
