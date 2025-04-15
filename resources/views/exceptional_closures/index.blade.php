@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')

    <div class="main-content">

                
            <h1>{{__('Exceptional closures')}}</h1>

            <a class="btn" href="{{ route('exceptional-closures.create') }}">
                {{ __('Add exceptional closure') }}
            </a>

            <table class="details">
                <thead>
                    <tr>    
                        <th>{{ __('Start date') }}</th>
                        <th>{{ __('End date') }}</th>
                        <th>{{ __('Reason') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exceptionalClosures as $exceptionalClosure)
                    <tr>
                        <td>{{ $exceptionalClosure->start_date->format('d/m/Y') }}</td>
                        <td>{{ $exceptionalClosure->end_date->format('d/m/Y') }}</td>
                        <td>{{ $exceptionalClosure->reason }}</td>
                        <td>
                            <a href="{{ route('exceptional-closures.edit', $exceptionalClosure) }}">{{ __('edit') }}</a>
                            <form action="{{ route('exceptional-closures.destroy', $exceptionalClosure) }}" method="POST" style="display: inline;">
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
