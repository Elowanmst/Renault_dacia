@extends('layouts.app')

@section('content')
    <div class="container bg-slate-50 mx-auto p-4 text-center space-y-6 bg-slate-100 rounded-lg">
        <a href="{{ route('users.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mb-6">{{ __('back') }}</a>

        <h1 class="text-2xl underline mb-4">{{ $users->name }}</h1>
        <p class="mb-4">{{ $users->email }}</p>
        <p class="text-sm text-gray-500 mb-6"><small>{{ __('created at') }} {{ $users->created_at->format('M d, Y') }}</small></p>

        <div class="flex flex-col space-x-8 justify-center mt-6">
            <a href="{{ route('users.edit', $users) }}" class="text-blue-500 hover:underline">{{ __('edit') }}</a>
            <form action="{{ route('users.destroy', $users) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete" >{{ __('delete') }}</button>
            </form>
        </div>
    </div>
@endsection