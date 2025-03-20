@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Vehicle</h1>
        <form action="{{ route('vehicle.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" name="brand" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" name="model" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" name="color" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="license_plate">License Plate</label>
                <input type="text" name="license_plate" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="user_id">User</label>
                <select name="user_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
