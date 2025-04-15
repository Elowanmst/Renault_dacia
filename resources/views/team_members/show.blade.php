@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/vehicle.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
    <div class="main-content">
        <a href="{{ route('team_members.index') }}">{{ __('back') }}</a>

        <h1>{{ $teamMember->name }}</h1>
        <p>{{ __('Email') }}: {{ $teamMember->email }}</p>
        <p>{{ __('Bio') }}: {{ $teamMember->bio }}</p>

        <div>
            <a href="{{ route('team_members.edit', $teamMember) }}">{{ __('edit') }}</a>
            <form action="{{ route('team_members.destroy', $teamMember) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">{{ __('delete') }}</button>
            </form>
        </div>
    </div>
@endsection