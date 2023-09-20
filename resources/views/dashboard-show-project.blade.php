@extends('layouts.dashboard.main')

@section('content')
    <div class="flex flex-col flex-1 w-full">

        {{-- container --}}
        <div
            class="w-full bg-gray-200 dark:bg-gray-700 px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">
            <div class="max-w rounded-b-lg bg-slate-100 px-8 pt-4 text-left">
                <a href="{{ url('/') }}/#portfolio"
                    class="text-white bg-blue-800 hover:bg-blue-700 rounded-full text-sm font-medium px-6 py-2 text-center inline-flex items-center">
                    <svg fill="currentColor" class="w-5 h-5 mr-2 -ml-1" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M17 10a.75.75 0 01-.75.75H5.612l4.158 3.96a.75.75 0 11-1.04 1.08l-5.5-5.25a.75.75 0 010-1.08l5.5-5.25a.75.75 0 111.04 1.08L5.612 9.25H16.25A.75.75 0 0117 10z">
                        </path>
                    </svg>
                    Back
                </a>
            </div>
            <div class="flex md:space-x-10 items-center justify-center">
                <div data-aos="zoom-in" data-aos-once="true" class="text-center">
                    <h1
                        class="mb-6 text-5xl font-bold leading-tight text-darken uppercase text-blue-800 dark:text-gray-300">
                        Detail Project
                    </h1>
                </div>
            </div>
            <div class="flex mx-8 px-8 py-3 mb-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="w-full self-center lg:w-1/2">
                    <h1 class="font-medium dark:text-white text-xl text-darken">{{ $project->title }}</h1>
                    <p class="lg:text-sm text-xs text-slate-700 text-gray-600 dark:text-gray-400">
                        {{ $project->category->category_name }}
                        project by <a href="/" class="hover:text-dark text-sky-500">{{ $project->author->name }}</a>
                        on {{ $project->created_at->diffForHumans() }}
                    </p>
                    <div class="mb-4">
                        @if ($project->image)
                            <div class="mx-auto flex justify-center rounded-lg">
                                <img src="{{ asset('storage/' . $project->image) }}"
                                    alt="{{ $project->category->category_name }}" class="mt-4 mb-2 rounded-lg max-h-80">
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
                </div>
            </div>
        </div>
        {{-- .container  --}}
        {{-- vector --}}
        <div class="w-full bg-gray-200 dark:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#252641" fill-opacity="1"
                    d="M0,224L40,202.7C80,181,160,139,240,154.7C320,171,400,245,480,256C560,267,640,213,720,176C800,139,880,117,960,133.3C1040,149,1120,203,1200,202.7C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </div>
    @endsection
