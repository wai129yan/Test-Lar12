@extends('layouts.app')
@section('title', 'Post Edit')
@section('contact')
    <h1 class="text-3xl font-bold text-center hel">Post Edit</h1>

    <div class="w-100 bg-slate-100 m-auto p-7 mt-5 rounded-2xl">
        <form class="max-w-sm mx-auto" action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                @error('title')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                <textarea id="content" name="content" rows="5" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                <input type="hidden" name="old-image" value="{{ $post->image }}">
                <img src="{{ asset('storage/' . $post->image) }}" width="150px" alt="">
                <input type="file" id="image" name="image" accept="image/*"
                    class="block p-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" />
                <p class="mt-1 text-sm text-gray-500">Optional: Upload an image file</p>
                @error('image')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <select id="status" name="status" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Published
                    </option>
                </select>
                @error('status')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
                <select id="user_id" name="user_id" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Select a user</option>
                    @if (isset($users))
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}"
                                {{ old('user_id', $post->user_id) == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}</option>
                        @endforeach
                    @endif
                </select>
                @error('user_id')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5">
                <label for="category_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select id="category_id" name="category_id" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Select a category</option>
                    @if (isset($categories))
                        @forelse ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @empty
                            <option disabled>No categories available</option>
                        @endforelse
                    @else
                        <option disabled>Categories not available</option>
                    @endif
                </select>
                @error('category_id')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>

@endsection
