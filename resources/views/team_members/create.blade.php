@extends('layouts.admin')

@section('styles')
@vite(['resources/css/admin/dashboard.css']) 
@endsection

@section('content')

<div class="main-content">
    
    <a class="back-btn" href="{{ route('team_members.index') }}">{{ __('back') }}</a>
    
    <h1>{{ __('Add new team member') }}</h1>
    <form class="admin-form" action="{{ route('team_members.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control" >
        </div>
        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input type="email" name="email" class="form-control" >
        </div>
        <div class="form-group">
            <label for="role">{{ __('Role') }}</label>
            <input type="text" name="role" class="form-control" >
        </div>
        <div class="form-group">
            <label for="bio">{{ __('Bio') }}</label>
            <input type="text" name="bio" class="form-control" >
        </div>
        <div class="form-group">
            <label for="profile_picture">{{ __('Photo') }}</label>
            <input type="file" name="profile_picture" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
    </form>
    
</div>

@endsection
