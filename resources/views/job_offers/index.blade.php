@extends('layouts.admin')

@section('styles')
    {{-- @vite(['resources/css/admin/service.css']) --}}
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')


    <div class="main-content">

        <h1>{{__('Job offers')}}</h1>

        <a class="btn" href="{{ route('job_offers.create') }}">
            {{ __('add service') }}
        </a>



        <table class="details">
            <thead>
                <tr>    
                    <th>{{ __('Title') }}</th>
                    <th>{{ __('description') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobOffers as $jobOffer)
                <tr onclick="window.location='{{ route('job_offers.show', $jobOffer) }}'" style="cursor: pointer;">
                    <td>{{ $jobOffer->title }}</td>
                    <td>{{ $jobOffer->description }}</td>
                    <td>
                        <a href="{{ route('job_offers.edit', $jobOffer) }}">{{ __('edit') }}</a>
                        <form action="{{ route('job_offers.destroy', $jobOffer) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn-delete" type="submit">{{ __('delete') }}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

@endsection
