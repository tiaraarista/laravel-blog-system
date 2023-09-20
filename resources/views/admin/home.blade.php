@extends('layouts.admin.main')

@section('content')
    <div class="container px-6 py-6 mx-auto grid">
        <h4 class="mb-2 text-2xl font-semibold text-gray-600 dark:text-gray-300">Home</h4>
        <h4 class="mb-4 text-base font-semibold text-gray-600 dark:text-gray-300">
            Hello! <span class="text-blue-800">{{ Auth::user()->name }}</span> welcome to your system
        </h4>
        <!-- Cards -->
        <div class="grid gap-4 mb-4 grid-cols-2 lg:grid-cols-3">
            <!-- Card -->
            <a href="{{ route('projects.index') }}">
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-3 mr-4 text-blue-800 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-blue-800">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Projects
                        </p>
                        <p class="px-2 text-lg font-semibold text-gray-600 dark:text-gray-200">
                            {{ \App\Models\Project::count() }}
                        </p>
                    </div>
                </div>
            </a>
            <!-- Card -->
            <a href="{{ route('categories.index') }}">
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-3 mr-4 text-blue-800 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-blue-800">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Categories
                        </p>
                        <p class="px-2 text-lg font-semibold text-gray-600 dark:text-gray-200">
                            {{ \App\Models\Category::count() }}
                        </p>
                    </div>
                </div>
            </a>
            <!-- Card -->
            <a href="{{ route('profile.index') }}">
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-3 mr-4 text-blue-800 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-blue-800">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            User
                        </p>
                        <p class="px-2 text-lg font-semibold text-gray-600 dark:text-gray-200">
                            {{ \App\Models\User::count() }}
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="grid gap-6 mb-8 lg:grid-cols-2">
            <!-- Doughnut/Pie chart -->
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="mb-4 text-center font-semibold text-gray-800 dark:text-gray-300">
                    Projects Chart
                </h4>
                <canvas id="categoryChart" class="chart"></canvas>
            </div>
            {{-- Activity --}}
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    Activity History
                </h4>
                @foreach ($projects->take(4) as $project)
                    <a>
                        <div class="flex items-center p-4">
                            <div
                                class="p-2 mr-4 text-blue-800 bg-gray-100 rounded-full dark:text-gray-300 dark:bg-blue-800">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-700 dark:text-gray-300">
                                    <span class="font-semibold">{{ $project->author->name }} </span>
                                    created
                                    <span class="font-semibold">{{ $project->title }}</span> on
                                    {{ $project->created_at->diffForHumans() }}.
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.admin.footer')
    @push('chart')
        <script>
            const ctx = document.getElementById('categoryChart');

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Website', 'Game Development', 'Mobile'],
                    datasets: [{
                        label: 'project',
                        data: [
                            {{ \App\Models\Project::where('category_id', '=', '2')->count() }},
                            {{ \App\Models\Project::where('category_id', '=', '3')->count() }},
                            {{ \App\Models\Project::where('category_id', '=', '4')->count() }},
                            // {{ \App\Models\Project::where('category_id', '=', 'category:category_id')->count() }},
                            // $books = Book::with('author:id,name,book_id')->get();
                        ],

                        backgroundColor: ['#0694a2', '#1c64f2', '#7e3af2'],
                        borderWidth: 1
                    }]
                }
            });
        </script>
    @endpush
@endsection
