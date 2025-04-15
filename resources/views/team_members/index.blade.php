@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')

    <div class="main-content">


            <h1>{{__('Our team')}}</h1>

            <a href="{{ route('team_members.create') }}" class="btn">{{__('Add new team member')}}</a>

            <table class="details">
                <thead>
                    <tr>
                        <th>{{ __('name') }}</th>
                        <th>{{ __('email') }}</th>
                        <th>{{ __('bio') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teamMembers as $teamMember)
                    <tr>
                        <td>{{ $teamMember->name }}</td>
                        <td>{{ $teamMember->email }}</td>
                        <td>{{ $teamMember->bio }}</td>
                        <td>
                            <a href="{{ route('team_members.show', $teamMember) }}">{{ __('view') }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection