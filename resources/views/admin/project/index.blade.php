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
            <h4 class="mb-4 text-lg font-semibold text-gray-500 dark:text-gray-400">
                All {{ $title }}
            </h4>
            <a class="inline-flex items-center justify-center text-base px-2 py-2 mb-4 w-40 text-white transition-colors duration-150 bg-blue-800 hover:bg-blue-700 rounded-md focus:outline-none focus:shadow-outline-gray"
                href="{{ route('projects.create') }}">
                <svg class="h-6 w-6 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="12" y1="5" x2="12" y2="19" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
                <span class="ml-2 text-sm">Add {{ $title }}</span>
            </a>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-700">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Project</th>
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    @if (!empty($projects) && $projects->count())
                        @foreach ($projects as $index => $project)
                            <?php $i = $projects->perPage() * ($projects->currentPage() - 1); ?>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 text-center">
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        {{ $index + $projects->firstItem() }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $project->title }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $project->category->category_name }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center justify-center space-x-4 text-sm">
                                            <a href="{{ route('projects.edit', $project->slug) }}"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-800 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <button data-te-toggle="modal"
                                                data-te-target="#deleteProject_{{ $project->slug }}"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-800 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                            <a href="{{ route('projects.show', $project->slug) }}"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-800 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Show">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                    <path fill-rule="evenodd"
                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            {{-- MODAL DELETE --}}
                            <div data-te-modal-init
                                class="fixed top-0 left-0 z-50 hidden h-full w-full items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
                                id="deleteProject_{{ $project->slug }}" tabindex="-1" aria-modal="true"
                                aria-labelledby="exampleModalCenterTitle" role="dialog">
                                <div class="h-screen flex items-center justify-center">
                                    <div data-te-modal-dialog-ref
                                        class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl">
                                        <header class="flex justify-end">
                                            <button
                                                class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                                                aria-label="close" data-te-modal-dismiss type="button">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    role="img" aria-hidden="true">
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
                        @endforeach
                    @else
                        <tr>
                            <td class="px-4 py-3 text-center text-sm text-gray-700 dark:text-gray-400" colspan="10">
                                No data
                            </td>
                        </tr>
                    @endif
                </table>
                <div>
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
