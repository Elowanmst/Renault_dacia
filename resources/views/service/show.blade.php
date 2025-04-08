@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('services.index') }}">{{ __('back') }}</a>

        <h1>{{ $services->model }}</h1>
        <p>{{ __('name') }}: {{ $services->name }}</p>
        <p>{{ __('description') }}: {{ $services->description }}</p>

        <div>
            <a href="{{ route('services.edit', $services) }}">{{ __('edit') }}</a>
            <form action="{{ route('services.destroy', $services) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">{{ __('delete') }}</button>
            </form>
        </div>
    </div>
@endsection