@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')

    <div class="main-content">

                
            <h1>{{__('vehicles list')}}</h1>

            <a class="btn" href="{{ route('vehicles.create') }}">
                {{ __('add vehicle') }}
            </a>

            <table class="details">
                <thead>
                    <tr>
                        <th>{{ __('picture') }}</th>
                        <th>{{ __('brand') }}</th>
                        <th>{{ __('model') }}</th>
                        <th>{{ __('year') }}</th>
                        <th>{{ __('price') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehicles as $vehicle)
                    <tr onclick="window.location='{{ route('vehicles.show', $vehicle) }}'" style="cursor: pointer;">
                        <td>
                            @if ($vehicle->getFirstMediaUrl('vehicles', 'thumb'))
                                <img src="{{ $vehicle->getFirstMediaUrl('vehicles', 'thumb') }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}">
                            @else
                                <p>{{ __('No image available') }}</p>
                            @endif
                        </td>
                        <td>{{ $vehicle->brand }}</td>
                        <td>{{ $vehicle->model }}</td>
                        <td>{{ $vehicle->year }}</td>
                        <td>{{ $vehicle->price }} €</td>
                        <td>
                            <a href="{{ route('vehicles.edit', $vehicle) }}">{{ __('edit') }}</a>
                            <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete" type="submit">{{ __('delete') }}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $vehicles->links() }}

    </div>

@endsection
