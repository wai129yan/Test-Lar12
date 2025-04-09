@extends('layouts.app')
@section('title', 'Welcome3')
@section('contact')
<h1 class="text-3xl home font-bold bg-red-500 text-black text-center">Welcome</h1>
<p class="bg-amber-50 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, maiores quaerat soluta commodi, molestias blanditiis iure ratione excepturi magni, optio eos. Quo eligendi modi amet ex dolor eaque id non magni aperiam, provident ullam temporibus quidem est doloribus, doloremque, quasi tempore dicta incidunt quos eum expedita! Temporibus aperiam qui sequi.</p>
<p>Name is {{$name}}</p>
<p>Age is {{$age}}</p>
<p>Posts</p>
@php
    // echo '<pre>';
    // print_r($posts);
    // echo '</pre>';
@endphp
<ul>
    @foreach ($posts as $post )
        <li>{{$post['title']}} - {{$post['body']}}</li>
    @endforeach
</ul>
@endsection

@push('styles')
    <style>
        .home {
            background-color:rgb(234, 184, 184);
        }
    </style>
@endpush

@push('scripts')
    {{-- <script>
        alert("Home Page");
    </script> --}}
@endpush
