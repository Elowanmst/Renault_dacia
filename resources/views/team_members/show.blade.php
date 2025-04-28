@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/vehicle.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
    <div class="main-content">
        <a class="back-btn" href="{{ url()->previous() }}">{{ __('back') }}</a>
        <div class="admin-show">
            <h1>{{ $teamMember->name }}</h1>
            <h2>{{ $teamMember->role }}</h2>
            <p><i class="fas fa-envelope"></i>{{ $teamMember->email }}</p>
            <p>{{ $teamMember->bio }}</p>

            <div class="btn-show">
                <a class="btn-edit" href="{{ route('team_members.edit', $teamMember) }}"><i class="fas fa-pen" ></i>{{ __('edit') }}</a>
                <form action="{{ route('team_members.destroy', $teamMember) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete" type="submit"><i class="fas fa-trash"></i>{{ __('delete') }}</button>
                </form>
            </div>
            <div class="profile-picture">
                @if ($teamMember->getFirstMediaUrl('teamMembers', 'team-home'))
                    <img src="{{ $teamMember->getFirstMediaUrl('teamMembers', 'team-home') }}" alt="">
                @else
                    <p><i class="fas fa-image"></i>{{ __('No image available') }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection