@extends('layouts.admin')

@section('styles')
    {{-- @vite(['resources/css/admin/service.css']) --}}
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')


    <div class="main-content">

        <h1>{{__('Services')}}</h1>

        <a class="btn" href="{{ route('services.create') }}">
            {{ __('add service') }}
        </a>



        <table class="details">
            <thead>
                <tr>    
                    <th>{{ __('name') }}</th>
                    <th>{{ __('description') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $services)
                <tr onclick="window.location='{{ route('services.show', $services) }}'" style="cursor: pointer;">
                    <td>{{ $services->name }}</td>
                    <td>{{ $services->description }}</td>
                    <td>
                        <a href="{{ route('services.edit', $services) }}">{{ __('edit') }}</a>
                        <form action="{{ route('services.destroy', $services) }}" method="POST" style="display: inline;">
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
