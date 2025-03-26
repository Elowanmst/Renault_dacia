@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="m">Liste des utilisateurs</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Créer un nouvel utilisateur</a>
    <table class="">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Date de création</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                    <a href="{{ route('users.show', $user) }}">Voir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection