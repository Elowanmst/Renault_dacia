@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/service.css'])
    @vite(['resources/css/admin/dashboard.css']) 
@endsection

@section('content')
    <div class="main-content">

        <a class="back-btn" href="{{ route('services.index') }}">{{ __('back') }}</a>
        <h1>{{ __('add service') }}</h1>
        <form class="admin-form" action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ __('name') }}</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="picture">Image</label>
                <input type="file" name="picture" id="picture" class="form-control" accept="image/*">
            </div>
            
            <div class="form-group">
                <label for="description">{{ __('Description') }}</label>
                <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
        </form>
    </div>
@endsection
