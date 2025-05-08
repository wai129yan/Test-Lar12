@extends('layouts.app')
@section('title', 'Todo')
@section('contact')
    <h1 class="text-3xl font-bold text-center hel">Todos</h1>


    <div class="w-3/4 m-auto p-2 mt-5">
        <a href="{{ route('todos.create') }}"
            class="inline-block px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 transition duration-200 ease-in-out">
            New Todo
        </a>
        @if (session('success'))
            <p class="text-green-500 mt-1">{{ session('success') }}</p>
        @endif
        @include('components.todo-table')
    </div>
@endsection
