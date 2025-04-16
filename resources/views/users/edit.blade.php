@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')

<div class="main-content">

    <a href="{{ url()->previous() }}" class="back-btn">{{ __('back') }}</a>

    <h1>{{ __('edit user') }}</h1>

    <form class="admin-form" action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">{{ __('name') }}</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">{{ __('email') }}</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <button type="submit" class="btn">{{ __('confirm') }}</button>
    </form>
</div>
@endsection