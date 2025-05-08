@extends('layouts.app')
@section('title', 'Posts')
@section('contact')


    <h1 class="text-3xl font-bold p-5 text-center">Posts</h1>
    <div class="w-3/4 m-auto p-2 mt-5">
        <a href="{{ route('categories.create') }}"
            class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-medium rounded-lg text-sm transition duration-300 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                    clip-rule="evenodd" />
            </svg>
            New category
        </a>
        @if (session('success'))
            <p class="text-green-500 mt-1">{{ session('success') }}</p>
        @endif
        <div class="p-5">
            @foreach ($categories as $category)
                <div
                    class="group relative bg-white dark:bg-gray-800 rounded-xl shadow-lg transition-all duration-300 hover:shadow-2xl hover:scale-[1.02] mb-8">
                    <div class="relative overflow-hidden rounded-t-xl">
                        <img class="object-cover w-full h-[400px] transform transition duration-500 group-hover:scale-110"
                            src="{{ $category->image }}" alt="{{ $category->name }}">
                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition duration-300">
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <h5
                            class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 transition duration-300">
                            {{ $category->name }}
                        </h5>

                        <div class="space-y-3">
                            <p class="text-sm font-medium text-blue-500 dark:text-blue-400">
                                {{ $category->slug }}
                            </p>

                            <p class="text-gray-600 dark:text-gray-300 line-clamp-3">
                                {{ $category->description }}
                            </p>
                        </div>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center space-x-3">
                                <input name="is_active" type="checkbox" value="1"
                                    {{ old('is_active', $category->is_active) ? 'checked' : '' }}
                                    class="w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 transition duration-150 ease-in-out">
                                <label class="text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Status
                                </label>
                            </div>
                            <div class="flex space-x-2">
                                <a href="{{ route('categories.edit', $category->id) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Edit
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300"
                                        onclick="return confirm('Are you sure you want to delete this category?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
