@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
    <div class="main-content">
        <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>
        <div class="admin-show">

            <h1>{{ $jobOffer->title }}</h1>

            @if (!empty($jobOffer->description))
                <p><i class="fas fa-align-left"></i> {{ $jobOffer->description }}</p>
            @endif
            <div class="flex">
                <div class="">
                @if (!empty($jobOffer->location))
                    <p><i class="fas fa-map-marker-alt"></i> {{ $jobOffer->location }}</p>
                @endif

                @if (!empty($jobOffer->salary_description))
                    <p><i class="fas fa-money-bill-wave"></i> {{ $jobOffer->salary_description }}</p>
                @endif

                @if (!empty($jobOffer->status))
                    <p><i class="fas fa-info-circle"></i> {{ $jobOffer->status }}</p>
                @endif

                @if (!empty($jobOffer->type))
                    <p><i class="fas fa-briefcase"></i> {{__('job_offers.types.' . $jobOffer->type) }}</p>
                @endif
                </div>
                <div class="">
                    @if (!empty($jobOffer->requirements))
                        <p><i class="fas fa-list"></i> {{ $jobOffer->requirements }}</p>
                    @endif

                    @if (!empty($jobOffer->responsibilities))
                        <p><i class="fas fa-tasks"></i> {{ $jobOffer->responsibilities }}</p>
                    @endif

                    @if (!empty($jobOffer->posted_at))
                        <p><i class="fas fa-calendar-plus"></i> {{ $jobOffer->posted_at }}</p>
                    @endif

                    @if (!empty($jobOffer->expires_at))
                        <p><i class="fas fa-calendar-times"></i> {{ $jobOffer->expires_at }}</p>
                    @endif
                </div>
            </div>

            <div class="btn-show">
                <a class="btn-edit" href="{{ route('job_offers.edit', $jobOffer) }}">
                    <i class="fas fa-pen"></i> {{ __('edit') }}
                </a>
                <form action="{{ route('job_offers.destroy', $jobOffer) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete" type="submit"><i class="fas fa-trash"></i>{{ __('delete') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection