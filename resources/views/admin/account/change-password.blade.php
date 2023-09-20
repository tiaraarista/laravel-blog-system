@extends('layouts.admin.main')

@section('content')

    <body>
        <div class="container grid mt-6 px-6 mx-auto">
            <div class="flex flex-row items-center justify-between">
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    {{ $title }}
                </h4>
                <a class="inline-flex items-center text-center justify-center text-sm px-2 py-1 mb-4 w-25 text-red-600 transition-colors duration-150 bg-transparent border border-red-600 hover:bg-red-600 hover:text-white rounded-md focus:outline-none focus:shadow-outline-gray"
                    href="{{ route('profile.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                    <span class="ml-2">Cancel</span>
                </a>
            </div>
            <form method="post" action="{{ route('password.update', Auth::user()->id) }}" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="mt-4 text-sm">
                        <label for="current-password" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Current Password</span>
                            <input type="password" id="current-password" name="current-password"
                                class="block w-full mt-1 text-sm @error('current-password') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                autofocus placeholder="current password" required />
                        </label>
                        <span class="help-block with-errors"></span>
                        @error('current-password')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-4 text-sm">
                        <label for="password" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Password</span>
                            <input type="password" id="password" name="password"
                                class="block w-full mt-1 text-sm @error('password') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                autofocus placeholder="password" required />
                        </label>
                        <span class="help-block with-errors"></span>
                        @error('password')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-4 text-sm">
                        <label for="password-confirm" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Password Confirm</span>
                            <input type="password" id="confirm-password" name="confirm-password"
                                class="block w-full mt-1 text-sm @error('confirm-password') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="password confirm" required />
                        </label>
                        <span class="help-block with-errors"></span>
                        @error('confirm-password')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="inline-flex items-center justify-center text-base px-2 py-2 mt-4 mb-4 w-45 text-white transition-colors duration-150 bg-blue-800 hover:bg-blue-700 rounded-md focus:outline-none focus:shadow-outline-gray">
                            <svg class="mt-1 h-6 w-6 text-white" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="1" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z">
                                </path>
                            </svg>
                            <span class="ml-2">{{ $title }}</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
@endsection
