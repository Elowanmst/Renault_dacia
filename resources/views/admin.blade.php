@extends('layouts.app')

@section('content')

    <div class="">

        <div">
            <h2>My Dashboard</h2>
        </div>    
        
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="">
                Logout
            </button>
        </form>

        
        <div class="admin-section">
            <h3>Manage Cars</h3>
            <a href="{{ route('vehicles.index') }}" class="btn btn-primary">View All Cars</a>
            <a href="{{ route('vehicles.create') }}" class="btn btn-success">Add New Car</a>
        </div>

        <div class="admin-section">
            <h3>Manage Services</h3>
            <a href="" class="btn btn-primary">View All Services</a>
            <a href="" class="btn btn-success">Add new Services</a>
        </div>

        <div class="admin-section">
            <h3>Manage Customers</h3>
            <a href="" class="btn btn-primary">View All Customers</a>
            <a href="" class="btn btn-success">Add New Customer</a>
        </div>

        <div class="admin-section">
            <h3>Manage Accounts</h3>
            <a href="{{ route('users.index') }}" class="btn btn-primary">View All Accounts</a>
        </div>
    </div>
@endsection