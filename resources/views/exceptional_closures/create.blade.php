@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css']) 
@endsection

@section('content')

    <div class="main-content">

        <div class="container">

            <a class="back-button" href="{{ route('exceptional-closures.index') }}">{{ __('back') }}</a>

            <h1>{{ __('Add exceptional closure') }}</h1>
            <form action="{{ route('exceptional-closures.store') }}" method="post">
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
    </div>
    
@endsection
