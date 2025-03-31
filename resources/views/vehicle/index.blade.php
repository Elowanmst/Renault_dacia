@extends('layouts.admin')

@section('styles')
    @vite(['resources/css/admin/vehicles.css'])
    @vite(['resources/css/admin/dashboard.css'])
@endsection

@section('content')
    <div class="vehicle-container">


        <div class="vehicle-list">
            
            <h1>Mes véhicules</h1>

            <a class="btn" href="{{ route('vehicles.create') }}">
                Ajouter un véhicule
            </a>

            <table class="vehicle-details">
                <thead>
                    <tr>    
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>Année</th>
                        <th>Prix</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehicles as $vehicle)
                    <tr onclick="window.location='{{ route('vehicles.show', $vehicle) }}'" style="cursor: pointer;">
                        <td>{{ $vehicle->brand }}</td>
                        <td>{{ $vehicle->model }}</td>
                        <td>{{ $vehicle->year }}</td>
                        <td>{{ $vehicle->price }} €</td>
                        <td>
                            <a href="{{ route('vehicles.edit', $vehicle) }}">Modifier</a>
                            <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        {{ $vehicles->links() }}

    </div>

@endsection
