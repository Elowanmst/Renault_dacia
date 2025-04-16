@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
    <div class="main-content">
        <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>

        <h1>{{ $jobOffer->model }}</h1>
        <p>{{ __('Title') }}: {{ $jobOffer->title }}</p>
        <p>{{ __('description') }}: {{ $jobOffer->description }}</p>

        <div>
            <a href="{{ route('job_offers.edit', $jobOffer) }}">{{ __('edit') }}</a>
            <form action="{{ route('job_offers.destroy', $jobOffer) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button class="btn-delete" type="submit">{{ __('delete') }}</button>
            </form>
        </div>
    </div>
@endsection