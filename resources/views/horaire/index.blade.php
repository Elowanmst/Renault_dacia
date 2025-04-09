@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/horaire.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')

    <div class="main-content">

            
            <h1>{{__('opening hours list')}}</h1>

            <a class="btn" href="{{ route('horaires.create') }}">
                {{ __('Add opening hours') }}
            </a>

            <table class="details">
                <thead>
                    <tr>    
                        <th>{{ __('day') }}</th>
                        <th>{{ __('morningOpening') }}</th>
                        <th>{{ __('morningClosing') }}</th>
                        <th>{{ __('afternoonOpening') }}</th>
                        <th>{{ __('afternoonClosing') }}</th>
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
                                <button class="btn-delete" type="submit">{{ __('delete') }}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        {{-- {{ $services->links() }} --}}

    </div>

@endsection

