@extends('layouts.admin.main')

@section('content')

    <body>
        <div class="container grid mt-6 px-6 mx-auto">
            <form method="post" action="{{ route('projects.update', $project->slug) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    {{ $title }}
                </h4>
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow dark:bg-gray-800">
                    <div class="mt-4 text-sm">
                        <label for="title" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">title</span>
                            <input type="text" id="title" name="title"
                                class="block w-full mt-1 text-sm @error('title') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                autofocus placeholder="title" value="{{ $project->title }}" />
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
                            class="block w-full mt-1 text-sm @error('category') is-invalid @enderror dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray">
                            @foreach ($categories as $category)
                                @if (old('categories_id', $project->category_id) == $category->category_id)
                                    <option value="{{ $category->category_id }}" selected>{{ $category->category_name }}
                                    </option>
                                @else
                                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('category')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                    <div class="mt-4 text-sm">
                        <label for="slug" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Slug</span>
                            <input type="text" id="slug" name="slug"
                                class="block w-full mt-1 text-sm @error('slug') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                readonly placeholder="Slug" required value="{{ $project->slug }}" />
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
                        <input type="hidden" name="oldImage" value="{{ $project->image }}">
                        @if ($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}"
                                class="img-preview mb-3 rounded-lg max-w-xs max-h-40">
                        @else
                            <img class="hidden img-preview mb-3 rounded-lg max-w-xs max-h-40">
                        @endif
                        <div class="relative text-gray-500 focus-within:text-blue-800">
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
                        <label for="body" class="text-gray-700 dark:text-gray-400">Description</label>
                        <textarea id="body" name="body"
                            class=" dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Your description">{{ $project->body }}
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
                            <span class="ml-2 text-sm">{{ $title }}</span>
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
