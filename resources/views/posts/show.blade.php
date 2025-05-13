@extends('layouts.app')
@section('title', 'Post Details')
@section('content')

<h1 class="text-3xl font-bold text-center hel">Post Details</h1>

{{-- <div class="w-100 bg-slate-100 m-auto p-7 mt-5 rounded-2xl">
    <div class="max-w-sm mx-auto">
        <!-- Post Title -->
        <h1 class="text-2xl font-bold mb-5">{{ $post['title'] }}</h1>

        <!-- Post Content -->
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
            <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                {{ $post['content']}}
            </p>
        </div>

        <!-- Post Image -->
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" width="150px" alt="Post Image">
            @else
                <p class="text-gray-500">No image available</p>
            @endif
        </div>

        <!-- Post Status -->
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
            <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                {{ ucfirst($post['status']) }}
            </p>
        </div>

        <!-- Post User -->
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
            <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                {{ $post->user->name ?? 'N/A' }}
            </p>
        </div>

        <!-- Post Category -->
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
            <p class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                {{ $post->category->name ?? 'N/A' }}
            </p>
        </div>

        <!-- Back Button -->
        <a href="{{ route('posts.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Back to Posts
        </a>
    </div>
</div> --}}

@endsection
