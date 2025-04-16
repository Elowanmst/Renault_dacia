@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')

    <div class="main-content">

        <a href="{{ url()->previous() }}" class="">{{ __('back') }}</a>

        <h1 class="">{{ $users->name }}</h1>
        <p class="">{{ $users->email }}</p>
        <p class=""><small>{{ __('created at') }} {{ $users->created_at->format('M d, Y') }}</small></p>

        <div class="">
            <a href="{{ route('users.edit', $users) }}" class="">{{ __('edit') }}</a>
            <form action="{{ route('users.destroy', $users) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete" >{{ __('delete') }}</button>
            </form>
        </div>
    </div>
@endsection