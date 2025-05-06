@extends('layouts.admin')

@section('title', 'Garage Renault - Ajouter une fermeture exceptionnelle')

@section('styles')
@vite(['resources/css/admin/dashboard.css']) 
@endsection

@section('content')

<div class="main-content">
    
    <a class="back-btn" href="{{ route('exceptional-closures.index') }}">{{ __('back') }}</a>
    
    <h1>{{ __('Add exceptional closure') }}</h1>
    <form class="admin-form" action="{{ route('exceptional-closures.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="start_date">{{ __('Start date') }}</label>
            <input type="date" name="start_date" class="form-control" >
        </div>
        <div class="form-group">
            <label for="end_date">{{ __('End date') }}</label>
            <input type="date" name="end_date" class="form-control" >
        </div>
        <div class="form-group">
            <label for="reason">{{ __('Reason') }}</label>
            <input type="text" name="reason" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">{{ __('create') }}</button>
    </form>
    
</div>

@endsection
