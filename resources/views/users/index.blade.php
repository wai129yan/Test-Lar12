@extends('layouts.app')
@section('title', 'Users')
@section('contact')

    <h1 class="text-3xl font-bold p-5 text-center">Users</h1>

    <div class="w-3/4 m-auto p-2 mt-5">
        <a href="{{ route('users.create') }}"
            class="inline-flex items-center px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-medium rounded-lg text-sm transition duration-300 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                    clip-rule="evenodd" />
            </svg>
            New User
        </a>
        @if (session('success'))
            {{-- <p class="text-green-500 mt-1">{{ session('success') }}</p> --}}


            <div class="flex justify-end items-center">

                @if (session('success'))
                    <div id="toast-interactive"
                        class="w-full max-w-xs p-4 text-gray-700 bg-sky-200 rounded-lg shadow-sm dark:bg-gray-600 dark:text-gray-400"
                        role="alert">
                        <div class="flex">
                            <div
                                class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:text-blue-300 dark:bg-blue-900">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M16 1v5h-5M2 19v-5h5m10-4a8 8 0 0 1-14.947 3.97M1 10a8 8 0 0 1 14.947-3.97" />
                                </svg>
                            </div>
                            <div class="ms-3 font-normal">
                                <span class="mb-1 text-2xl font-semibold text-gray-900 dark:text-white">Tap here to update
                                    !</span>
                                <div class="mb-2 text-xl font-normal"> We’ve just released an update! </div>
                                <div class="grid grid-cols-2 gap-2">
                                </div>
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-white items-center justify-center shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                data-dismiss-target="#toast-interactive" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        @endif
        <div class="p-5">
            @foreach ($users as $user)
                <div
                    class="group relative bg-white dark:bg-gray-800 rounded-xl shadow-lg transition-all duration-300 hover:shadow-2xl hover:scale-[1.02] mb-8">
                    <div class="relative overflow-hidden rounded-t-xl">
                        <img class="object-cover w-full h-[300px] transform transition duration-500 group-hover:scale-110"
                            src="{{ $user->image ? Storage::url($user->image) : asset('storage/posts/a.jpg') }}" alt="{{ $user->title }}">
                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition duration-300">
                        </div>
                    </div>
                    {{-- Eloquent Model:::function name --}}
                    <div class="p-6 space-y-4">
                        <div
                            class="flex flex-col md:flex-row gap-6 p-6 bg-gray-50 dark:bg-gray-900  justify-center items-start">
                            <!-- Left Column: User Header and Basic Info -->
                            <!-- Left Column: User Header and Basic Info -->
                            <div class="w-full md:w-1/3 bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h5
                                        class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 transition duration-300">
                                        {{ $user->title }}
                                    </h5>
                                    <!-- Uncomment if status is needed -->
                                    <!-- <span class="py-1 px-3 bg-amber-900 text-white text-sm font-medium rounded-full">{{ $user->status }}</span> -->
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between">
                                        <a href="#"
                                            class="text-xl font-semibold text-gray-800 dark:text-gray-200 hover:text-blue-600 transition-colors duration-200">
                                            {{ $user->name }}
                                        </a>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">
                                            Post By: <a href="#"
                                                class="text-blue-500 hover:underline">{{ $user->name }}</a>
                                        </span>
                                    </div>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">
                                        Created At: {{ $user->created_at->diffForHumans() }}
                                    </span>
                                </div>
                            </div>

                            <!-- Right Column: User Details -->
                            <div
                                class="w-full md:w-2/3 bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mt-6 md:mt-0 md:ml-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <p class="text-gray-600 dark:text-gray-300">
                                        <strong class="font-semibold">Email:</strong> {{ $user->email }}
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        <strong class="font-semibold">Phone:</strong> {{ $user->phone }}
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        <strong class="font-semibold">Job:</strong> {{ $user->job }}
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        <strong class="font-semibold">Date of Birth:</strong> {{ $user->date_of_birth }}
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300 col-span-2">
                                        <strong class="font-semibold">Address:</strong> {{ $user->address }}
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300 col-span-2">
                                        <strong class="font-semibold">Email Verified At:</strong>
                                        {{ $user->email_verified_at }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end pt-4 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex space-x-2">
                                <a href="{{ route('users.edit', $user->id) }}"
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
                                <a href="{{ route('users.show', $user) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-sky-500 rounded-lg hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Show
                                </a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300"
                                        onclick="return confirm('Are you sure you want to delete this user?')">
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

        <!-- Pagination -->
        <div class="mt-6">
            {{ $users->links('pagination::tailwind') }}
        </div>
    </div>

@endsection
