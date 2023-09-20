<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }"\>
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden shadow-sm w-64 overflow-y-auto bg-blue-800 dark:bg-gray-800 md:block flex-shrink-0">
        <div class="py-4 text-gray-200 dark:text-gray-400">
            <a class="ml-6 px-4 text-2xl font-bold text-gray-100 dark:text-gray-300" href="{{ url('/admin/home') }}">
                Tiara
            </a>
            <ul class="mt-6">
                <li class="relative pl-6 py-2">
                    <a class="inline-flex items-center w-full py-2 px-4 text-sm font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
                        href="{{ url('/') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 4C6.486 4 2 8.486 2 14a9.89 9.89 0 0 0 1.051 4.445c.17.34.516.555.895.555h16.107c.379 0 .726-.215.896-.555A9.89 9.89 0 0 0 22 14c0-5.514-4.486-10-10-10zm7.41 13H4.59A7.875 7.875 0 0 1 4 14c0-4.411 3.589-8 8-8s8 3.589 8 8a7.875 7.875 0 0 1-.59 3z">
                            </path>
                            <path
                                d="M10.939 12.939a1.53 1.53 0 0 0 0 2.561 1.53 1.53 0 0 0 2.121-.44l3.962-6.038a.034.034 0 0 0 0-.035.033.033 0 0 0-.045-.01l-6.038 3.962z">
                            </path>
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
            </ul>
            {{-- <ul class="space-y-2 font-medium border-t border-gray-200 dark:border-gray-600"></ul> --}}
            <ul>
                <li class="relative pl-6 py-3">
                    @if (request()->routeIs('home'))
                        <a class="inline-flex items-center w-full py-2 px-4 bg-gray-50 dark:bg-gray-900 rounded-l-full text-blue-800 dark:text-white text-sm font-semibold transition-colors duration-150"
                            href="{{ url('/admin/home') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Home</span>
                        </a>
                    @else
                        <a class="inline-flex items-center w-full py-2 px-4 text-sm font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
                            href="{{ url('/admin/home') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Home</span>
                        </a>
                    @endif
                </li>
                <li class="relative pl-6 py-3">
                    @if (request()->routeIs('projects*'))
                        <a class="inline-flex items-center w-full py-2 px-4 bg-gray-50 dark:bg-gray-900 rounded-l-full text-blue-800 dark:text-white text-sm font-semibold transition-colors duration-150"
                            href="{{ route('projects.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                            <span class="ml-4">Projects</span>
                        </a>
                    @else
                        <a class="inline-flex items-center w-full py-2 px-4 text-sm font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
                            href="{{ route('projects.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                            <span class="ml-4">Projects</span>
                        </a>
                    @endif
                </li>
                <li class="relative pl-6 py-3">
                    @if (request()->routeIs('categories*'))
                        <a class="inline-flex items-center w-full py-2 px-4 bg-gray-50 dark:bg-gray-900 rounded-l-full text-blue-800 dark:text-white text-sm font-semibold transition-colors duration-150"
                            href="{{ route('categories.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4 ">Categories</span>
                        </a>
                    @else
                        <a class="inline-flex items-center w-full py-2 px-4 text-sm font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
                            href="{{ route('categories.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4">Categories</span>
                        </a>
                    @endif
                </li>
                <li class="relative pl-6 py-3">
                    @if (request()->routeIs('profile*'))
                        <a class="inline-flex items-center w-full py-2 px-4 bg-gray-50 dark:bg-gray-900 rounded-l-full text-blue-800 dark:text-white text-sm font-semibold transition-colors duration-150"
                            href="{{ route('profile.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                </path>
                            </svg>
                            <span class="ml-4 ">Profile</span>
                        </a>
                    @elseif (request()->routeIs('password*'))
                        <a class="inline-flex items-center w-full py-2 px-4 bg-gray-50 dark:bg-gray-900 rounded-l-full text-blue-800 dark:text-white text-sm font-semibold transition-colors duration-150"
                            href="{{ route('profile.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                </path>
                            </svg>
                            <span class="ml-4 ">Profile</span>
                        </a>
                    @else
                        <a class="inline-flex items-center w-full py-2 px-4 text-sm font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
                            href="{{ route('profile.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                </path>
                            </svg>
                            <span class="ml-4">Profile</span>
                        </a>
                    @endif
                </li>
            </ul>
        </div>
    </aside>
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    </div>
    <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-blue-800 dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu">
        <div class="py-4 text-gray-200 dark:text-gray-400">
            <a class="ml-6 text-xl font-bold text-gray-200 dark:text-purple-300" href="{{ url('/home') }}">
                Tiara
            </a>
            <ul class="mt-6">
                <li class="relative pl-6 py-2">
                    <a class="inline-flex items-center w-full py-2 px-4 text-sm font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
                        href="{{ url('/') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 4C6.486 4 2 8.486 2 14a9.89 9.89 0 0 0 1.051 4.445c.17.34.516.555.895.555h16.107c.379 0 .726-.215.896-.555A9.89 9.89 0 0 0 22 14c0-5.514-4.486-10-10-10zm7.41 13H4.59A7.875 7.875 0 0 1 4 14c0-4.411 3.589-8 8-8s8 3.589 8 8a7.875 7.875 0 0 1-.59 3z">
                            </path>
                            <path
                                d="M10.939 12.939a1.53 1.53 0 0 0 0 2.561 1.53 1.53 0 0 0 2.121-.44l3.962-6.038a.034.034 0 0 0 0-.035.033.033 0 0 0-.045-.01l-6.038 3.962z">
                            </path>
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
            </ul>
            {{-- <ul class="space-y-2 font-medium border-t border-gray-200 dark:border-gray-600"></ul> --}}
            <ul>
                <li class="relative pl-6 py-3">
                    @if (request()->routeIs('home'))
                        <a class="inline-flex items-center w-full py-2 px-4 bg-gray-50 dark:bg-gray-900 rounded-l-full text-blue-800 dark:text-white text-sm font-semibold transition-colors duration-150"
                            href="{{ url('/admin/home') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Home</span>
                        </a>
                    @else
                        <a class="inline-flex items-center w-full py-2 px-4 text-sm font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
                            href="{{ url('/admin/home') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Home</span>
                        </a>
                    @endif
                </li>
            </ul>
            <ul>
                <li class="relative pl-6 py-3">
                    @if (request()->routeIs('projects*'))
                        <a class="inline-flex items-center w-full py-2 px-4 bg-gray-50 dark:bg-gray-900 rounded-l-full text-blue-800 dark:text-white text-sm font-semibold transition-colors duration-150"
                            href="{{ route('projects.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                            <span class="ml-4">Projects</span>
                        </a>
                    @else
                        <a class="inline-flex items-center w-full py-2 px-4 text-sm font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
                            href="{{ route('projects.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                            <span class="ml-4">Projects</span>
                        </a>
                    @endif
                </li>
                <li class="relative pl-6 py-3">
                    @if (request()->routeIs('categories*'))
                        <a class="inline-flex items-center w-full py-2 px-4 bg-gray-50 dark:bg-gray-900 rounded-l-full text-blue-800 dark:text-white text-sm font-semibold transition-colors duration-150"
                            href="{{ route('categories.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4 ">Categories</span>
                        </a>
                    @else
                        <a class="inline-flex items-center w-full py-2 px-4 text-sm font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
                            href="{{ route('categories.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4">Categories</span>
                        </a>
                    @endif
                </li>
                <li class="relative pl-6 py-3">
                    @if (request()->routeIs('profile*'))
                        <a class="inline-flex items-center w-full py-2 px-4 bg-gray-50 dark:bg-gray-900 rounded-l-full text-blue-800 dark:text-white text-sm font-semibold transition-colors duration-150"
                            href="{{ route('profile.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                </path>
                            </svg>
                            <span class="ml-4 ">Profile</span>
                        </a>
                    @elseif (request()->routeIs('password*'))
                        <a class="inline-flex items-center w-full py-2 px-4 bg-gray-50 dark:bg-gray-900 rounded-l-full text-blue-800 dark:text-white text-sm font-semibold transition-colors duration-150"
                            href="{{ route('profile.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                </path>
                            </svg>
                            <span class="ml-4 ">Profile</span>
                        </a>
                    @else
                        <a class="inline-flex items-center w-full py-2 px-4 text-sm font-semibold transition-colors duration-150 hover:text-white dark:hover:text-gray-200"
                            href="{{ route('profile.index') }}">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                </path>
                            </svg>
                            <span class="ml-4">Profile</span>
                        </a>
                    @endif
                </li>
            </ul>
        </div>
    </aside>
