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
            <form method="post" action="{{ route('profile.update', Auth::user()->id) }}" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="mt-4 text-sm">
                        <label for="name" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Name</span>
                            <input type="text" id="name" name="name"
                                class="block w-full mt-1 text-sm @error('name') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                autofocus placeholder="name" value="{{ Auth::user()->name }}" />
                        </label>
                        <span class="help-block with-errors"></span>
                        @error('name')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-4 text-sm">
                        <label for="email" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Email</span>
                            <input type="text" id="email" name="email"
                                class="block w-full mt-1 text-sm @error('email') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                autofocus placeholder="email" value="{{ Auth::user()->email }}" />
                        </label>
                        <span class="help-block with-errors"></span>
                        @error('email')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-4 text-sm">
                        <label for="username" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Username</span>
                            <input type="text" id="username" name="username"
                                class="block w-full mt-1 text-sm @error('username') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="username" value="{{ Auth::user()->username }}" />
                        </label>
                        <span class="help-block with-errors"></span>
                        @error('username')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Profile Image</span>
                        <input type="hidden" name="oldImage" value="{{ Auth::user()->avatar }}">
                        @if (Auth::user()->avatar)
                            <img class="img-profile mt-1 rounded-full max-w-xs max-h-20"
                                src="{{ asset('/storage/' . Auth::user()->avatar) }}">
                        @else
                            <img class="img-profile mt-1 rounded-full max-w-xs max-h-20"
                                src="{{ asset('assets/img/user.png') }}">
                        @endif
                        <div class="relative text-gray-500 focus-within:text-blue-800">
                            <img class="hidden img-preview mt-4 mb-4 rounded-lg max-w-xs max-h-20">
                            <input type="file" id="avatar" name="avatar" onchange="previewImage()"
                                class="block mt-2 file:rounded-lg file:bg-blue-800 file:border-none file:font-medium file:text-white file:tracking-wide file:px-4 file:py-2 file:mr-2 file:cursor-pointer w-full text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray form-input" />
                        </div>
                        @error('avatar')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                    <div class="mt-4 text-sm">
                        <label for="job" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Job</span>
                            <input type="text" id="job" name="job"
                                class="block w-full mt-1 text-sm @error('job') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Job" value="{{ Auth::user()->job }}" />
                        </label>
                        <span class="help-block with-errors"></span>
                        @error('job')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="block mt-4 text-sm">
                        <label for="about" class="text-gray-700 dark:text-gray-400 mb-4">About</label>
                        <textarea id="body" name="about"
                            class=" dark:border-gray-600 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="About">{{ Auth::user()->about }}
                        </textarea>
                        <span class="help-block with-errors"></span>
                        @error('body')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="inline-flex items-center justify-center text-base px-2 py-2 mt-4 mb-4 w-40 text-white transition-colors duration-150 bg-blue-800 hover:bg-blue-700 rounded-md focus:outline-none focus:shadow-outline-gray">
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                </path>
                            </svg>
                            <span class="ml-2">update Profile</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>

    <script>
        tinymce.init({
            selector: '#body',
            skin: (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'oxide-dark' : 'oxide'),
            content_css: (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default'),
            plugins: [
                'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help',
                'wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | removeformat | a11ycheck code table',
        });
    </script>
@endsection
