@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/service.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
<div class="main-content">

    <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>

    <h1>{{ __('edit service') }}</h1>
    <form class="admin-form" action="{{ route('job_offers.update', $jobOffer->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">{{ __('name') }}</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $jobOffer->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">{{ __('description') }}</label>
            <input type="textarea" class="form-control" id="description" name="description" value="{{ $jobOffer->description }}" required>
        </div>
        <div class="form-group">
            <label for="why_join_us">{{ __('Why join us (advantages)') }}</label>
            <textarea name="why_join_us" class="form-control" rows="5">{{ $jobOffer->why_join_us }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
    </form>
</div>
@endsection


