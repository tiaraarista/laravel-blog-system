@extends('layouts.admin.main')

@section('content')

    <body>
        <div class="container grid mt-6 px-6 mx-auto">
            <form action="{{ route('categories.store') }}" method="post">
                {{ csrf_field() }}
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    {{ $title }}
                </h4>
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow dark:bg-gray-800">
                    <div class="mt-4 text-sm">
                        <label for="category_name" class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Category Name</span>
                            <input type="text" id="category_name" name="category_name"
                                class="block w-full mt-1 text-sm @error('category_name') is-invalid @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                autofocus placeholder="Category Name" value="{{ old('category_name') }}" />
                        </label>
                        <span class="help-block with-errors"></span>
                        @error('category_name')
                            <span class="invalid-feedback text-xs text-red-400 pt-1" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                            <span class="ml-2 text-sm">Add Category</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>

    <script>
        const name = document.querySelector('#category_name')
        const slug = document.querySelector('#slug')

        name.addEventListener('change', function() {
            fetch('/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
