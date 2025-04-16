{{-- 

@extends('layouts.app')

@section('content')

<a href="{{ route('horaires.index') }}">{{ __('back') }}</a>

<h1>{{ $service->model }}</h1>
<p>{{ __('day') }}: {{ $horaire->day }}</p>
<p>{{ __('morning opening') }}: {{ $horaire->morningO }}</p>
<p>{{ __('morning opening') }}: {{ $horaire->morningC }}</p>
<p>{{ __('morning opening') }}: {{ $horaire->afternoonO }}</p>
<p>{{ __('morning opening') }}: {{ $horaire->afternoonC }}</p>

<div>
    <a href="{{ route('horaires.edit', $horaire) }}">{{ __('edit') }}</a>
    <form action="{{ route('horaires.destroy', $horaire) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button class="btn-delete" type="submit">{{ __('delete') }}</button>
    </form>
</div>

@endsection --}}
