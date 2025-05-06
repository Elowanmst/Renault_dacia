@extends('layouts.admin')

@section('title', 'Garage Renault - Evénements exceptionnels')

@section('styles')
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')

    <div class="main-content">

                
            <h1>{{__('Exceptional events')}}</h1>

            <a class="btn" href="{{ route('exceptional-events.create') }}">
                {{ __('Add exceptional closure') }}
            </a>

            <table class="details">
                <thead>
                    <tr>  
                        <th>{{ __('name') }}</th>  
                        <th>{{ __('Date') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exceptionalEvents as $exceptionalEvent)
                    <tr>
                        <td>{{ $exceptionalEvent->name }}</td>
                        <td>Du {{ $exceptionalEvent->start_date->format('d/m/Y') }} au {{ $exceptionalEvent->end_date->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('exceptional-events.edit', $exceptionalEvent) }}">{{ __('edit') }}</a>
                            <form action="{{ route('exceptional-events.destroy', $exceptionalEvent) }}" method="POST" style="display: inline;">
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
