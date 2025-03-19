@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-400 to-purple-500">
        <div class="w-full max-w-md p-8 bg-white shadow-2xl rounded-lg text-center transform transition duration-500 hover:shadow-3xl">
            <h1 class="text-3xl font-extrabold mb-6 text-gray-800">Welcome</h1>
            @if(Auth::check())
                <a href="{{ route('jsonld-generator') }}" class="text-white bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Go</a>
            @else
                <p class="text-red-600 mb-6">Please log in to access the admin.</p>
                <a href="{{ route('login') }}" class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Login</a>
                <a href="{{ route('register') }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Register</a>
            @endif
        </div>
    </div>
@endsection
