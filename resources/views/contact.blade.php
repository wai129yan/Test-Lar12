@extends('layouts.app')
@section('title', 'About')
@section('contact')
    <h1 class="text-3xl font-bold bg-amber-300 text-center hel">Contact</h1>
    <p class="text-center bg-amber-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo totam, omnis minus odit cumque necessitatibus culpa, soluta aliquam officia harum temporibus natus?</p>
@endsection


@push('styles')
   <style>
     .hel {
        margin:30px;
    }
   </style>
@endpush
