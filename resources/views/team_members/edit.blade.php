@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('edit member') }}</h1>
    <form action="{{ route('team_members.update', $teamMembers->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">{{ __('name') }}</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">{{ __('email') }}</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" >
        </div>

        <div class="form-group">
            <label for="role">{{ __('role') }}</label>
            <input type="text" name="role" id="role" class="form-control" value="{{ $teamMember->role }}" required>
        </div>

        <div class="form-group">
            <label for="bio">{{ __('bio') }}</label>
            <input type="text" name="bio" id="bio" class="form-control" value="{{ $teamMember->bio }}" >
        </div>

        <div class="form-group">
            <label for="role">{{ __('role') }}</label>
            <input type="text" name="role" id="role" class="form-control" value="{{ $teamMember->role }}" >
        </div>

        <button type="submit" class="btn btn-primary">{{ __('confirm') }}</button>
    </form>
</div>
@endsection