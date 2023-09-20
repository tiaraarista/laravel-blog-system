@extends('layouts.admin.main')

@section('content')
    <div class="container grid mt-6 px-6 mx-auto">
        <!-- Big section cards -->
        <div class="flex px-5 py-3 mb-4 bg-white rounded-lg shadow dark:bg-gray-800">
            <div class="w-full self-center lg:w-1/2">
                <p class="text-md font-bold text-gray-600 dark:text-gray-400">
                    {{ $title }}
                </p>
                <p class="text-sm font-semibold text-gray-600 dark:text-gray-400">{{ $project->title }}</p>
            </div>
            <div class="w-full self-center lg:w-1/2 text-right mt-2">
                <a href="{{ route('projects.edit', $project->slug) }}"
                    class="justify-between px-4 py-2 font-medium text-center inline-flex items-center ml-0 mb-3 text-sm leading-5 text-blue-800 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    aria-label="Edit">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                        </path>
                    </svg>
                </a>
                <button data-te-toggle="modal" data-te-target="#deleteProject_{{ $project->slug }}"
                    class="delete justify-between px-4 py-2 font-medium text-center inline-flex items-center ml-0 mb-3 text-sm leading-5 text-blue-800 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    aria-label="Delete">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Detail -->
        <div class="px-5 py-3 mb-4 bg-white rounded-lg shadow dark:bg-gray-800">
            <div class="max-w rounded-t-lg bg-slate-200 py-3 mb-4">
                <p class="text-md font-bold text-gray-600 dark:text-gray-400">
                    {{ $project->title }}
                </p>
                <p class="lg:text-sm text-xs text-slate-700 text-gray-600 dark:text-gray-400">
                    {{ $project->category->category_name }}
                    project by <a href="/" class="hover:text-dark text-sky-500">{{ $project->author->name }}</a>
                    on {{ $project->created_at->diffForHumans() }}
                </p>
            </div>

            <div class="px-5 mb-4">
                @if ($project->image)
                    <div class="mx-auto flex justify-center rounded-lg">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->category->category_name }}"
                            class="mt-4 mb-2 rounded-lg max-h-80">
                    </div>
                @else
                    <img src="https://source.unsplash.com/700x360?{{ $project->category->category_name }}"
                        alt="{{ $project->category->category_name }}"
                        class="mt-4 mb-2 rounded-lg mx-auto flex justify-center">
                @endif
                <p class="mb-4 mt-4 text-base text-gray-600 dark:text-gray-400">
                    {!! $project->body !!}
                </p>
            </div>
            <div class="max-w rounded-b-lg bg-slate-100 px-5 py-3 text-right">
                <a href="{{ route('projects.index') }}"
                    class="text-white bg-green-500 hover:bg-green-600 rounded-full text-sm font-medium px-4 py-2 text-center inline-flex items-center">
                    <svg fill="currentColor" class="w-5 h-5 mr-2 -ml-1" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M17 10a.75.75 0 01-.75.75H5.612l4.158 3.96a.75.75 0 11-1.04 1.08l-5.5-5.25a.75.75 0 010-1.08l5.5-5.25a.75.75 0 111.04 1.08L5.612 9.25H16.25A.75.75 0 0117 10z">
                        </path>
                    </svg>
                    Back
                </a>
            </div>
        </div>
    </div>
    {{-- MODAL DELETE --}}
    <div data-te-modal-init
        class="fixed top-0 left-0 z-50 hidden h-full w-full items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
        id="deleteProject_{{ $project->slug }}" tabindex="-1" aria-modal="true" aria-labelledby="exampleModalCenterTitle"
        role="dialog">
        <div class="h-screen flex items-center justify-center">
            <div data-te-modal-dialog-ref
                class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl">
                <header class="flex justify-end">
                    <button
                        class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                        aria-label="close" data-te-modal-dismiss type="button">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                            <path
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </header>
                <form action="{{ route('projects.destroy', $project->slug) }}" method="POST">
                    @method('delete')
                    @csrf
                    <!-- Modal body -->
                    <div class="mt-4 mb-6">
                        <!-- Modal title -->
                        <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                            Delete
                        </p>
                        <!-- Modal description -->
                        <p class="text-sm text-gray-700 dark:text-gray-400">
                            Are you sure want to delete {{ $project->title }} project?
                        </p>
                    </div>
                    <footer
                        class="flex flex-col items-end justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-2 sm:flex-row bg-gray-50 dark:bg-gray-800">
                        <button type="submit"
                            class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-800 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-gray">
                            Accept
                        </button>
                </form>
                <button data-te-modal-dismiss type="button"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-400 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                </footer>
            </div>
        </div>
    </div>
@endsection
