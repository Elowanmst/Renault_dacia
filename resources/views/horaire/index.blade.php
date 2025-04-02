

@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/horaire.css'])
    {{-- @vite(['resources/css/admin/dashboard.css']) --}}
@endsection

@section('content')
    <div class="horaires-container">


        <div class="horaires-list">
            
            <h1>{{__('horaire list')}}</h1>

            <a class="btn" href="{{ route('horaires.create') }}">
                {{ __('add horaire') }}
            </a>

            <table class="horaires-details">
                <thead>
                    <tr>    
                        <th>{{ __('day') }}</th>
                        <th>{{ __('morning opening') }}</th>
                        <th>{{ __('morning closing') }}</th>
                        <th>{{ __('afternoon opening') }}</th>
                        <th>{{ __('afternoon closing') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($horaires as $horaires)
                    <tr onclick="window.location='{{ route('horaires.show', $horaires) }}'" style="cursor: pointer;">
                        <td>{{ $horaires->day }}</td>
                        <td>{{ $horaires->morningO }}</td>
                        <td>{{ $horaires->morningC }}</td>
                        <td>{{ $horaires->afternoonO }}</td>
                        <td>{{ $horaires->afternoonC }}</td>
                        <td>
                            <a href="{{ route('horaires.edit', $horaires) }}">{{ __('edit') }}</a>
                            <form action="{{ route('horaires.destroy', $horaires) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">{{ __('delete') }}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        {{-- {{ $services->links() }} --}}

    </div>

@endsection

