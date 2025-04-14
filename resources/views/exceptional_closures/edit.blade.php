@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/vehicle.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
<div class="main-content">

    <a href="{{ route('exceptional-closures.index') }}">{{ __('back') }}</a>

    <h1>{{ __('Edit exceptional closure') }}</h1>
    <form action="{{ route('exceptional-closures.update', $exceptionalClosure->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="start_date">{{ __('Start date') }}</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $exceptionalClosure->start_date->format('Y-m-d') }}" required>
        </div>

        <div class="form-group">
            <label for="end_date">{{ __('End date') }}</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $exceptionalClosure->end_date->format('Y-m-d') }}" required>
        </div>

        <div class="form-group">
            <label for="reason">{{ __('Reason') }}</label>
            <input type="text" class="form-control" id="reason" name="reason" value="{{ $exceptionalClosure->reason }}">
        </div>

        <button type="submit" class="btn">{{ __('Update exceptional closure') }}</button>
    </form>
</div>
@endsection


