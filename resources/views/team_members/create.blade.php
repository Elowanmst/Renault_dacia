@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('Add new member') }}</h1>
    <form action="{{ route('team_members.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">{{ __('name') }}</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">{{ __('email') }}</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="role">{{ __('role') }}</label>
            <input type="text" name="role" id="role" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
    </form>
</div>
@endsection