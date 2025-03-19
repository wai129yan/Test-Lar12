@extends('layouts.app')
@section('title', 'Welcome3')
@section('content')
<h1 class="text-3xl home font-bold bg-red-500 text-black">Welcome</h1>
@endsection

@push('styles')
    <style>
        .home {
            background-color:red;
        }
    </style>
@endpush

@push('scripts')
    <script>
        alert("Home Page");
    </script>
@endpush