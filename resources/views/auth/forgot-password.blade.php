@extends('layouts.app')

@section('title', 'Garage Renault - Mot de passe oublié')

@section('content')

<div class="flex items-center justify-center h-screen">
    <div class="max-w-md w-full p-6">
        <h2 class="text-2xl font-bold mb-4 text-center">{{ __('Forgot Password') }}</h2>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                {{ __('Send Password Reset Link') }}
            </button>
        </form>

        <a href="{{ route('login') }}" class="block mt-4 text-center text-sm text-indigo-600 hover:underline">
            {{ __('Back to Login') }}
        </a>
    </div>
</div>

@endsection
