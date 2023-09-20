<nav class="navbar z-50 py-4 px-6 w-full bg-gray-100 dark:bg-gray-800" style="position:fixed;">
    <div class="flex items-center justify-between h-full text-blue-800 dark:text-gray-200">
        <div class="relative w-full">
            <div class="absolute inset-y-0 flex items-center text-lg font-semibold text-blue-800">
                <a class="ml-4 text-3xl lg:text-4xl font-bold font-sans text-blue-800 dark:text-gray-200"
                    href="{{ url('/') }}">
                    {{ 'Tiara' }}
                </a>
            </div>
        </div>
        <!-- Hamburger button for mobile view -->
        <button class="p-1 mr-2 rounded-md md:hidden focus:outline-none hover:text-blue-700 dark:hover:text-gray-200"
            type="button" data-te-collapse-init data-te-target="#navbarMobile" aria-controls="navbarMobile"
            aria-expanded="false" aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span class="[&>svg]:w-7">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>
        <!-- .Hamburger button for mobile view -->
        <div class="!visible hidden md:!flex">
            <ul class="flex flex-col justify-center items-center sm:flex-row space-x-4">
                @auth
                    <li>
                        <a href="{{ url('/admin/home') }}" class="list py-2 px-2 text-base font-medium hover:text-blue-700">
                            Admin
                        </a>
                    </li>
                @endauth
                <li>
                    <a href="#hero" class="list nav-active py-2 px-2 text-base font-medium hover:text-blue-700">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#services" class="list p-2 px-2 text-base font-medium hover:text-blue-700">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#portfolio" class="list p-2 px-2 text-base font-medium hover:text-blue-700">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#skill" class="list p-2 px-2 text-base font-medium hover:text-blue-700">
                        Skill
                    </a>
                </li>
                <li>
                    <a href="#education" class="list p-2 px-2 text-base font-medium hover:text-blue-700">
                        Education
                    </a>
                </li>
                <!-- Theme toggler -->
                <li>
                    <a class="flex justify-center p-2 px-2 hover:text-blue-700" @click="toggleTheme"
                        aria-label="Toggle color mode">
                        <template x-if="!dark">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                        </template>
                        <template x-if="dark">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </template>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="hidden w-full z-40 text-center mt-12 sm:flex" id="navbarMobile" style="position:fixed;">
    <ul
        class="font-medium w-full flex flex-col p-4 mt-4 rounded-lg bg-gray-100 dark:bg-gray-800 text-blue-800 dark:text-gray-300">
        <li>
            <a href="#hero" class="block py-2 pl-3 pr-4 rounded-md hover:text-white hover:bg-blue-700">Home</a>
        </li>
        <li>
            <a href="#services" class="block py-2 pl-3 pr-4 rounded-md hover:text-white hover:bg-blue-700">Services</a>
        </li>
        <li>
            <a href="#portfolio"
                class="block py-2 pl-3 pr-4 rounded-md hover:text-white hover:bg-blue-700">Portfolio</a>
        </li>
        <li>
            <a href="#skill" class="block py-2 pl-3 pr-4 rounded-md hover:text-white hover:bg-blue-700">Skill</a>
        </li>
        <li>
            <a href="#education"
                class="block py-2 pl-3 pr-4 rounded-md hover:text-white hover:bg-blue-700">Education</a>
        </li>
        <li>
            <a class="flex justify-center py-2 pl-3 pr-4 rounded-md hover:text-white hover:bg-blue-700"
                @click="toggleTheme" aria-label="Toggle color mode">
                <template x-if="!dark">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </template>
                <template x-if="dark">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </template>
            </a>
        </li>
    </ul>
</div>
