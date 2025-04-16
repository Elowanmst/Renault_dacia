@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
<div class="main-content">

    <a href="{{ url()->previous() }}">{{ __('back') }}</a>

    <h1>{{ __('edit team member') }}</h1>
    <form action="{{ route('team_members.update', $teamMember->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">{{ __('name') }}</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $teamMember->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">{{ __('email') }}</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $teamMember->email }}" required>
        </div>
        <div class="form-group">
            <label for="role">{{ __('role') }}</label>
            <input type="text" class="form-control" id="role" name="role" value="{{ $teamMember->role }}" required>
        </div>
        <div class="form-group">
            <label for="bio">{{ __('bio') }}</label>
            <input type="text" class="form-control" id="bio" name="bio" value="{{ $teamMember->bio }}" required>
        </div>
        <div class="form-group">
            <label for="profile_picture">{{ __('photo') }}</label>
            <input type="file" class="form-control" id="profile_picture" name="profile_picture">
        </div>

        <button type="submit" class="btn btn-primary">{{ __('update team member') }}</button>
    </form>
</div>
@endsection


