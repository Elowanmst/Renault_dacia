@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/Admin/users.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
<div class="user-container">
    <h1 class="mb-4">{{__('Users list')}}</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">{{__('create a new user')}}</a>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>{{ __('username') }}</th>
                <th>Email</th>
                <th>{{ __('created at') }}</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('users.show', $user) }}" class="btn btn-info btn-sm">{{ __('view') }}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection