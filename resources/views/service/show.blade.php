@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('services.index') }}">{{ __('back') }}</a>

        <h1>{{ $service->model }}</h1>
        <p>{{ __('name') }}: {{ $service->name }}</p>
        <p>{{ __('description') }}: {{ $service->description }}</p>

        <div>
            <a href="{{ route('services.edit', $service) }}">{{ __('edit') }}</a>
            <form action="{{ route('services.destroy', $service) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">{{ __('delete') }}</button>
            </form>
        </div>
    </div>
@endsection