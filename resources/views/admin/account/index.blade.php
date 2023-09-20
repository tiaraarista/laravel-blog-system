@extends('layouts.admin.main')

@section('content')
    <!-- With actions -->
    <div class="container grid mt-6 px-6 mx-auto">
        @if (Session::has('success'))
            <div class="flex p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                role="alert" data-te-alert-init data-te-alert-show>
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-te-alert-dismiss aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        @endif
        <div class="flex flex-row items-center justify-between">
            <div class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                <h4 class="text-lg">{{ $title }}</h4>
                <p class="text-sm">Account information</p>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <a class="inline-flex items-center text-center justify-center text-sm px-2 py-1 mb-4 w-25 text-red-600 transition-colors duration-150 bg-transparent border border-red-600 hover:bg-red-600 hover:text-white rounded-md focus:outline-none focus:shadow-outline-gray"
                    href="{{ route('password.edit', Auth::user()->id) }}">
                    <svg class="ml-1 md:ml-0 mt-1 h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd">
                        </path>
                    </svg>
                    <span class="hidden md:block">Change Password</span>
                </a>
                <a class="inline-flex items-center justify-center text-sm px-2 py-1 mb-4 w-25 text-blue-800 transition-colors duration-150 bg-transparent border border-blue-800 hover:text-white hover:bg-blue-800 rounded-md focus:outline-none focus:shadow-outline-gray"
                    href="{{ route('profile.edit', Auth::user()->id) }}">
                    <svg class="ml-1 md:ml-0 mt-1 h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                        </path>
                    </svg>
                    <span class="hidden md:block">Edit Profile</span>
                </a>
            </div>
        </div>

        <div class="grid gap-4 mb-4 md:grid-cols-2">
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="flex px-4 py-2 justify-center items-center">
                    @if (Auth::user()->avatar)
                        <img class="img-profile mt-1 rounded-md max-w-xs max-h-40"
                            src="{{ asset('/storage/' . Auth::user()->avatar) }}">
                    @else
                        <img class="img-profile mt-1 rounded-md max-w-xs max-h-40" src="{{ asset('assets/img/user.png') }}">
                    @endif
                </div>
                <div class="grid px-4 py-2 text-gray-600 dark:text-gray-300">
                    <p class="py-2 font-semibold text-lg">{{ Auth::user()->name }}</p>
                    <p class="inline-flex items-center text-sm py-1">
                        <span class="inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" class="mr-2 h-5 w-5"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v4h5v-2h2v2h6v-2h2v2h5V8c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 11h-2v-2H9v2H7v-2H2v6c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-6h-5v2z">
                                </path>
                            </svg>
                        </span>
                        {{ Auth::user()->job }}
                    </p>
                    <p class="inline-flex items-center text-sm py-1">
                        <span class="inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="mr-2 h-5 w-5">
                                <path
                                    d="m18.73 5.41-1.28 1L12 10.46 6.55 6.37l-1.28-1A2 2 0 0 0 2 7.05v11.59A1.36 1.36 0 0 0 3.36 20h3.19v-7.72L12 16.37l5.45-4.09V20h3.19A1.36 1.36 0 0 0 22 18.64V7.05a2 2 0 0 0-3.27-1.64z">
                                </path>
                            </svg>
                        </span>
                        {{ Auth::user()->email }}
                    </p>
                </div>
            </div>
            {{-- Activity --}}
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="px-5 mb-4 font-medium text-sm text-gray-600 dark:text-gray-300">
                    <p class="py-2 font-semibold text-base">About Me</p>
                    <p class="py-2">{!! Auth::user()->about !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
