@extends('layouts.app')
@section('title', 'Todo')
@section('contact')
    <h1 class="text-3xl font-bold bg-amber-300 text-center hel">Todos</h1>


    <div class="w-3/4 m-auto p-2 mt-5">
        <a href="{{route('todos.create')}}"" class="bg-green-300 p-3 rounded">
            New Todo
        </a>
        @if(session('success'))
            <p class="text-green-500 mt-1">{{session ('success')}}</p>
        @endif
        @include('components.todo-table')
    </div>


@endsection


