@extends('layouts.app')
@section('title', 'Posts')
@section('contact')


    <h1 class="text-3xl font-bold p-5 text-center">Posts</h1>
    <div class="w-3/4 m-auto p-2 mt-5">
        <a href="{{ route('posts.create') }}" class="bg-green-300 p-3 rounded">
            New Post
        </a>
        @if (session('success'))
            <p class="text-green-500 mt-1">{{ session('success') }}</p>
        @endif
        <div class="p-5 ">
            @foreach ($posts as $post)
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-5">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-[320px] md:w-[300px] md:rounded-none md:rounded-s-lg"
                        src="{{ $post->image }}" alt="This is Photo">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->content }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>


@endsection
