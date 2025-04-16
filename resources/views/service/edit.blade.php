@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/service.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
<div class="main-content">

    <a href="{{ url()->previous() }}">{{ __('back') }}</a>

    <h1>{{ __('edit service') }}</h1>
    <form action="{{ route('services.update', $services->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">{{ __('name') }}</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $services->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">{{ __('description') }}</label>
            <input type="textarea" class="form-control" id="description" name="description" value="{{ $services->description }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
    </form>
</div>
@endsection


