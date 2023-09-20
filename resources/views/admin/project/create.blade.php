@extends('layouts.admin.main')

@section('content')

    <body>
        <div class="container grid mt-6 px-6 mx-auto">
            <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    {{ $title }}
                </h4>
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow dark:bg-gray-800">
                    <div class="mt-4 text-sm">
                        <label for="title" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">title</span>
                            <input type="text" id="title" name="title"
                                class="block w-full mt-1 text-sm @error('title') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                autofocus placeholder="title" value="{{ old('title') }}" />
                        </label>
                        <span class="help-block with-errors"></span>
                        @error('title')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Category</span>
                        <select id="category" name="category_id"
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray">
                            @foreach ($categories as $category)
                                @if (old('category_id') == $category->category_id)
                                    <option value="{{ $category->category_id }}" selected>{{ $category->category_name }}
                                    </option>
                                @else
                                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </label>
                    <div class="mt-4 text-sm">
                        <label for="slug" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Slug</span>
                            <input type="text" id="slug" name="slug"
                                class="block w-full mt-1 text-sm @error('slug') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                readonly placeholder="Slug" required value="{{ old('slug') }}" />
                        </label>
                        <span class="help-block with-errors"></span>
                        @error('slug')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Project Image</span>
                        <div class="relative text-gray-500 focus-within:text-gray-600">
                            <img class="hidden img-preview mt-4 mb-4 rounded-lg max-w-xs max-h-40">
                            <input type="file" id="image" name="image" onchange="previewImage()"
                                class="block mt-2 file:rounded-lg file:bg-blue-800 file:border-none file:font-medium file:text-white file:tracking-wide file:px-4 file:py-2 file:mr-2 file:cursor-pointer w-full text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray form-input" />
                        </div>
                        @error('image')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                    <div class="block mt-4 text-sm">
                        <label for="body" class="text-gray-700 dark:text-gray-400 mb-4">Description</label>
                        <textarea id="body" name="body"
                            class=" dark:border-gray-600 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Your description">
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
                            <svg class="h-4 w-4 text-white" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            <span class="ml-2 text-sm">Add Project</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>

    <script>
        const name = document.querySelector('#title')
        const slug = document.querySelector('#slug')

        name.addEventListener('change', function() {
            fetch('/projects/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
