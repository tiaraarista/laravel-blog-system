@extends('layouts.dashboard.main')

@section('content')
    @include('layouts.dashboard.navbar')

    {{-- Hero Section --}}
    <section id="hero">
        <div class="bg-gray-100 dark:bg-gray-800">
            <div class="max-w-screen-xl px-12 py-4 mx-auto flex flex-col items-start sm:flex-row">
                {{-- Left Col --}}
                <div class="flex flex-col w-full md:w-1/2 md:pt-24 pt-12 items-start text-start mb-5">
                    <h1 data-aos="fade-right" data-aos-once="true"
                        class="sm:text-2xl md:text-5xl pt-12 font-bold leading-tight text-darken text-gray-800 dark:text-gray-300">
                        Hi!, <span class="text-blue-800 dark:text-gray-100">I am Tiara Arista.</span>
                    </h1>
                    <h1 data-aos="fade-left" data-aos-once="true" data-aos-delay="300"
                        class="my-2 sm:text-2xl md:text-5xl font-bold leading-tight text-darken text-gray-800 dark:text-gray-300">
                        Great to see you.
                    </h1>
                    <h1 data-aos="fade-right" data-aos-once="true" data-aos-delay="500"
                        class="my-2 sm:text-lg
                        md:text-2xl font-semibold leading-tight text-darken text-gray-800 dark:text-gray-300">
                        I'm a <span id="type-text" class="font-bold text-blue-800 dark:text-gray-100"></span>
                    </h1>
                    <p data-aos="fade-down" data-aos-once="true" data-aos-delay="500"
                        class="leading-normal text-base text-start mb-6 text-gray-700 dark:text-gray-400">
                        Graduated from Bachelor of Applied Informatics Engineering on PHB Tegal, I'm IT Enthusiast
                        especially Web Developer and UI Design. Kinda lookin' for front-end job, if you fit on me please
                        reach me out on my social network
                        <span><a class="text-blue-800 dark:text-gray-100 font-semibold" href="#footer">bellow.</a></span>
                        Thanks!
                    </p>
                    <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700"
                        class="grid md:grid-flow-col grid-flow-row justify-start gap-4">
                        {{-- <button
                            class="bg-purple-600 text-white font-bold text-base rounded-full w-45 h-12 py-2 px-8 focus:outline-none transform transition hover:scale-110 hover:bg-purple-700 duration-300 ease-in-out">
                            Curriculum Vitae
                        </button> --}}
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=tiaraaristahasanah@gmail.com&su=Reach%20out%20from%20Website&body=Hello%20Tiara!"
                            target="_blank"
                            class="flex items-center justify-center bg-transparent text-white dark:text-white bg-blue-800 text-sm font-bold rounded-md w-42 h-12 py-2 px-8 focus:outline-none transform transition hover:bg-blue-700 dark:hover:bg-white hover:text-white dark:hover:text-gray-800 duration-300 ease-in-out">
                            Get in Touch
                        </a>
                    </div>
                </div>
                {{-- Right Col --}}
                <div class="w-full md:1/2 lg:w-1/2 pt-12 relative" id="tiara">
                    <img data-aos="fade-up" data-aos-once="true" class="relative z-20 w-1/2 h-auto mx-auto"
                        src="{{ asset('assets/img/landing-page/tiara.webp') }}" alt="tiara" />
                    {{-- icon 1 --}}
                    <div data-aos="fade-up" data-aos-delay="" data-aos-once="true"
                        class="absolute top-20 left-10 sm:top-32 md:top-40 md:left-16 lg:top-28 floating-4">
                        <div style="background: #33EFA0"
                            class="w-24 h-24 lg:w-36 lg:h-36 rounded-full absolute z-10 -left-4  -top-12 animate-pulse">
                        </div>
                        <div style="background: #33D9EF;"
                            class="w-5 h-5 rounded-full absolute z-0 left-28 lg:left-36 top-12 animate-ping">
                        </div>
                    </div>
                    {{-- icon 2 --}}
                    <div data-aos="" data-aos-delay="300" data-aos-once="true"
                        class="absolute bottom-20 md:bottom-48 lg:bottom-24 -right-6 lg:right-2 floating-4">
                        <div style="background: #5B61EB;"
                            class="w-24 h-24 lg:w-36 lg:h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse">
                        </div>
                        <div style="background: #F56666;"
                            class="w-5 h-5 rounded-full absolute z-0 right-40 lg:right-52 bottom-1 animate-ping"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 -mt-12">
            <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e5e7eb" fill-opacity="1"
                    d="M0,224L40,202.7C80,181,160,139,240,154.7C320,171,400,245,480,256C560,267,640,213,720,176C800,139,880,117,960,133.3C1040,149,1120,203,1200,202.7C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
            <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#24262d" fill-opacity="1"
                    d="M0,224L40,202.7C80,181,160,139,240,154.7C320,171,400,245,480,256C560,267,640,213,720,176C800,139,880,117,960,133.3C1040,149,1120,203,1200,202.7C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>
    {{-- .Hero Section --}}

    <div class="grid px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">
        {{-- Services --}}
        <section id="services" class="grid pt-24">
            <div data-aos="flip-up" class="max-w-xl mx-auto text-center mb-4">
                <h1 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"
                    class="text-5xl font-bold leading-tight text-darken uppercase text-blue-800 dark:text-gray-300">
                    What Do I Help?
                </h1>
            </div>
            <div class="flex flex-col px-12 py-4 justify-start items-start sm:flex-row">
                <div class="w-1/2 grid py-4 justify-center">
                    <div data-aos="fade-up" class="flex items-center p-4">
                        <div
                            class="p-3 mr-4 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>

                        </div>
                        <div>
                            <p class="text-lg font-bold dark:text-gray-300">Website Development</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300" class="flex items-center p-4">
                        <div
                            class="p-3 mr-4 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-lg font-bold dark:text-gray-300">Website Design</p>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="700" class="flex items-center p-4">
                        <div
                            class="p-3 mr-4 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>

                        </div>
                        <div>
                            <p class="text-lg font-bold dark:text-gray-300">Web Profile</p>
                        </div>
                    </div>
                </div>
                <div class="grid md:w-1/2 sm:w-full py-4">
                    <p data-aos="fade-left" data-aos-delay="100"
                        class="text-lg font-medium leading-normal dark:text-gray-300 mt-4">
                        I will help you with finding the best solution and solve your problem.</p>
                    <p data-aos="fade-left" data-aos-delay="300"
                        class="text-lg font-medium leading-normal dark:text-gray-300 mt-2">
                        Make your website pretier with beautiful and simple design.</p>
                    <p data-aos="fade-left" data-aos-delay="700"
                        class="text-lg font-medium leading-normal dark:text-gray-300 mt-2">
                        Increase your website traffic access with SEO.</p>
                    <p data-aos="zoom-in" data-aos-delay="700"
                        class="text-2xl font-bold leading-tight mt-6 text-blue-800 dark:text-gray-100">
                        Let's Discuss Your Project
                    </p>
                    <div data-aos="fade-up" data-aos-delay="700" class="grid md:grid-col grid-row justify-start">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=tiaraaristahasanah@gmail.com&su=Reach%20out%20from%20Website%20Discuss%20Project&body=Hello%20Tiara!"
                            target="_blank"
                            class="flex mt-6 items-center justify-center bg-transparent text-blue-800 dark:text-white border-2 border-blue-800 dark:border-white text-sm font-bold rounded-md w-42 h-12 py-2 px-8 focus:outline-none transform transition hover:bg-blue-800 dark:hover:bg-white hover:text-white dark:hover:text-gray-800 duration-300 ease-in-out">
                            Discuss Project
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- .Services --}}

        {{-- portfolio --}}
        <section id="portfolio" class="grid pt-24">
            <div data-aos="flip-up" class="max-w-xl mx-auto text-center">
                <h1 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"
                    class="text-5xl font-bold leading-tight text-darken uppercase text-blue-800 dark:text-gray-300">
                    portfolio
                </h1>
            </div>
            {{-- carousel --}}
            <div class="grid md:grid-cols-3 gap-14 md:gap-5 mx-10 my-10">
                @foreach ($projects->take(3) as $project)
                    <?php $i = $projects->perPage() * ($projects->currentPage() - 1); ?>
                    <div data-aos="fade-left" class="bg-gray-100 dark:bg-gray-800 shadow-md text-start rounded-xl">
                        @if ($project->image)
                            <div class="mx-auto flex justify-center items-center rounded-lg h-44">
                                <img src="{{ asset('storage/' . $project->image) }}"
                                    alt="{{ $project->category->category_name }}"
                                    class="mb-2 rounded-t-lg items-center object-cover max-h-44 w-full">
                            </div>
                        @else
                            <div class="mx-auto flex justify-center items-center rounded-t-lg h-44">
                                <p class="leading-relaxed text-gray-500">None Image</p>
                            </div>
                        @endif
                        <div class="px-6 pt-6">
                            <p class="text-xs mb-2 text-gray-500 dark:text-gray-500">
                                {{ $project->category->category_name }}
                            </p>
                            <h1 class="font-medium dark:text-white text-xl text-darken">{{ $project->title }}
                            </h1>
                            <p class="text-gray-500 dark:text-gray-500">{{ $project->excerpt }}</p>
                            <div class="flex items-end justify-end pt-6">
                                <a class="inline-flex items-center justify-center text-base px-2 py-2 mb-4 w-30 text-white transition-colors duration-150 bg-blue-800 hover:bg-blue-700 rounded-md focus:outline-none"
                                    href="{{ route('project.show', $project->slug) }}">Readmore
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="-mt-10 px-10">
                {{ $projects->links('vendor.pagination.portfolio-pagination') }}
            </div>
        </section>
        {{-- .portfolio --}}

        {{-- skill --}}
        <section id="skill" class="flex md:space-x-10 items-center justify-center pt-24">
            <div class="text-center">
                <h1 data-aos="zoom-in"
                    class="text-5xl mb-8 font-bold leading-tight text-darken uppercase text-blue-800 dark:text-gray-300">
                    skill
                </h1>
                <div class="px-8 grid grid-cols-2 md:grid-cols-4 gap-4 content-center">
                    <div data-aos="fade-left" data-aos-delay="700"
                        class="max-w-sm mt-4 bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden shadow-md">
                        <div class="px-6 py-4">
                            <div data-aos="fade-up" class="flex justify-center items-center p-4">
                                <div
                                    class="p-5 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                                    <svg fill="currentColor" viewBox="0 0 24 24" stroke-width="0.3"
                                        stroke="currentColor" class="w-7 h-7">
                                        <path
                                            d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 text-base mt-4">
                                Hypertext Preprocessor (PHP)
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="300"
                        class="max-w-sm mt-4 bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden shadow-md">
                        <div class="px-6 py-4">
                            <div data-aos="fade-up" class="flex justify-center items-center p-4">
                                <div
                                    class="p-5 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                                    <svg fill="currentColor" viewBox="0 0 24 24" stroke-width="0.5"
                                        stroke="currentColor" class="w-7 h-7">
                                        <path
                                            d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-base mt-4">
                                JavaScript
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="700"
                        class="max-w-sm mt-4 bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden shadow-md">
                        <div class="px-6 py-4">
                            <div data-aos="fade-up" class="flex justify-center items-center p-4">
                                <div
                                    class="p-5 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                                        class="w-7 h-7">
                                        <path
                                            d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 text-base mt-4">
                                Laravel
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="300"
                        class="max-w-sm mt-4 bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden shadow-md">
                        <div class="px-6 py-4">
                            <div data-aos="fade-up" class="flex justify-center items-center p-4">
                                <div
                                    class="p-5 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                                    <svg fill="currentColor" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                                        class="w-7 h-7">
                                        <path
                                            d="M11.466 0c.88 1.423-.28 3.306-1.207 4.358-.899 1.02-1.992 1.873-2.985 2.8-1.066.996-2.091 2.044-2.967 3.213-1.753 2.339-2.827 5.28-2.038 8.199.788 2.916 3.314 4.772 6.167 5.429-1.44-.622-2.786-2.203-2.79-3.82-.003-1.765 1.115-3.262 2.505-4.246-.167.632-.258 1.21.155 1.774a1.68 1.68 0 0 0 1.696.642c1.487-.326 1.556-1.96.674-2.914-.872-.943-1.715-2.009-1.384-3.377.167-.685.588-1.328 1.121-1.787-.41 1.078.755 2.14 1.523 2.67 1.332.918 2.793 1.612 4.017 2.688 1.288 1.132 2.24 2.661 2.047 4.435-.208 1.923-1.736 3.26-3.45 3.936 3.622-.8 7.365-3.61 7.44-7.627.093-3.032-1.903-5.717-5.158-7.384.19.48.074.697-.058.924-.55.944-2.082 1.152-2.835.184-1.205-1.548.025-3.216.197-4.855.215-2.055-1.073-4.049-2.67-5.242z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 text-base mt-4">
                                CodeIgniter
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="300"
                        class="max-w-sm mt-4 bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden shadow-md">
                        <div class="px-6 py-4">
                            <div data-aos="fade-up" class="flex justify-center items-center p-4">
                                <div
                                    class="p-5 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                                    <svg fill="currentColor" viewBox="0 0 24 24" stroke-width="0.3"
                                        stroke="currentColor" class="w-7 h-7">
                                        <path
                                            d="M11.77 11.24H9.956V8.202h2.152c1.17 0 1.834.522 1.834 1.466 0 1.008-.773 1.572-2.174 1.572zm.324 1.206H9.957v3.348h2.231c1.459 0 2.232-.585 2.232-1.685s-.795-1.663-2.326-1.663zM24 11.39v1.218c-1.128.108-1.817.944-2.226 2.268-.407 1.319-.463 2.937-.42 4.186.045 1.3-.968 2.5-2.337 2.5H4.985c-1.37 0-2.383-1.2-2.337-2.5.043-1.249-.013-2.867-.42-4.186-.41-1.324-1.1-2.16-2.228-2.268V11.39c1.128-.108 1.819-.944 2.227-2.268.408-1.319.464-2.937.42-4.186-.045-1.3.968-2.5 2.338-2.5h14.032c1.37 0 2.382 1.2 2.337 2.5-.043 1.249.013 2.867.42 4.186.409 1.324 1.098 2.16 2.226 2.268zm-7.927 2.817c0-1.354-.953-2.333-2.368-2.488v-.057c1.04-.169 1.856-1.135 1.856-2.213 0-1.537-1.213-2.538-3.062-2.538h-4.16v10.172h4.181c2.218 0 3.553-1.086 3.553-2.876z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 text-base mt-4">
                                Bootstrap
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="700"
                        class="max-w-sm mt-4 bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden shadow-md">
                        <div class="px-6 py-4">
                            <div data-aos="fade-up" class="flex justify-center items-center p-4">
                                <div
                                    class="p-5 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                                    <svg fill="currentColor" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                                        class="w-7 h-7">
                                        <path
                                            d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 text-base mt-4">
                                Tailwind
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="300"
                        class="max-w-sm mt-4 bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden shadow-md">
                        <div class="px-6 py-4">
                            <div data-aos="fade-up" class="flex justify-center items-center p-4">
                                <div
                                    class="p-5 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                                    <svg fill="currentColor" viewBox="0 0 24 24" stroke-width="1" stroke="none"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7">
                                        <title>GitHub</title>
                                        <path
                                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 text-base mt-4">
                                Github
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="700"
                        class="max-w-sm mt-4 bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden shadow-md">
                        <div class="px-6 py-4">
                            <div data-aos="fade-up" class="flex justify-center items-center p-4">
                                <div
                                    class="p-5 text-blue-800 bg-gray-50 rounded-full shadow-md dark:text-gray-100 dark:bg-blue-800">
                                    <svg fill="currentColor" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                                        class="w-7 h-7">
                                        <path
                                            d="M21.147 0H2.853A2.86 2.86 0 000 2.853v18.294A2.86 2.86 0 002.853 24h18.294A2.86 2.86 0 0024 21.147V2.853A2.86 2.86 0 0021.147 0zM10.34 17.287a.953.953 0 01-.953.953h-4a.954.954 0 01-.954-.953V5.38a.953.953 0 01.954-.953h4a.954.954 0 01.953.953zm9.233-5.467a.944.944 0 01-.953.947h-4a.947.947 0 01-.953-.947V5.38a.953.953 0 01.953-.953h4a.954.954 0 01.953.953z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 text-base mt-4">
                                Trello
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- .skill --}}

        {{-- education --}}
        <section id="education" class="pt-24">
            <div class="flex md:space-x-10 items-center justify-center">
                <div data-aos="zoom-in" class="text-center">
                    <h1
                        class="mb-6 text-5xl font-bold leading-tight text-darken uppercase text-blue-800 dark:text-gray-300">
                        Education
                    </h1>
                </div>
            </div>
            <div class="md:flex p-6 md:space-x-10 items-start">
                <div data-aos="fade-down" class="md:w-7/12 relative">
                    <div style="background: #33EFA0"
                        class="w-32 h-32 rounded-full absolute z-0 left-4 -top-12 animate-pulse">
                    </div>
                    <div style="background: #33D9EF;"
                        class="w-5 h-5 rounded-full absolute z-0 left-36 -top-12 animate-ping">
                    </div>
                    <img class="relative z-20 md:left-12 left-2 floating dark:hidden max-h-80"
                        src="{{ asset('assets/img/landing-page/education.webp') }}" alt="education">
                    <img class="hidden z-20 md:left-12 left-2 floating dark:block relative  max-h-80"
                        src="{{ asset('assets/img/landing-page/education-dark.webp') }}" alt="education">
                    <div style="background: #5B61EB;"
                        class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse"></div>
                    <div style="background: #F56666;"
                        class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping"></div>
                </div>
                <div class="md:w-5/12 mt-20 p-4 md:mt-0 text-gray-800 dark:text-gray-300">
                    <div data-aos="fade-left" data-aos-delay="300" class="flex items-center space-x-5 my-5">
                        <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="#2F327D" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                        </div>
                        <p class="font-bold text-lg">Politeknik Harapan Bersama |<span
                                class="ml-2 text-xs font-semibold text-gray-700 dark:text-gray-400">2017 - 2021</span>
                        </p>
                    </div>
                    <div data-aos="fade-left" data-aos-delay="700" class="flex items-center space-x-5 my-5">
                        <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="#2F327D" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                            </svg>
                        </div>
                        <p class="font-bold text-lg">SMK N 1 Slawi |<span
                                class="ml-2 text-xs font-semibold text-gray-700 dark:text-gray-400">2014 - 2017</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- .education --}}
    </div>
    {{-- vector --}}
    <div class="w-full bg-gray-200 dark:bg-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#252641" fill-opacity="1"
                d="M0,224L40,202.7C80,181,160,139,240,154.7C320,171,400,245,480,256C560,267,640,213,720,176C800,139,880,117,960,133.3C1040,149,1120,203,1200,202.7C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </div>


    @yield('top')
    <!-- Load library from the CDN -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    @yield('bot')
    <!-- Setup and start animation! -->
    <script>
        var typed = new Typed('#type-text', {
            strings: ['Web Designer.', 'Front-end Developer.', 'Web Developer.', 'UI Designer.'],
            typeSpeed: 80,
            backSpeed: 60,
            loop: true
        });
    </script>
    <script>
        // shadow navbar
        window.addEventListener('scroll', (e) => {
            const nav = document.querySelector('.navbar');
            if (window.pageYOffset > 0) {
                nav.classList.add("shadow-md");
            } else {
                nav.classList.remove("shadow-md");
            }
        });
        // .shadow navbar
        let section = document.querySelectorAll('section');
        let navActive = document.querySelectorAll('.list');

        window.onscroll = () => {
            section.forEach(sec => {
                let top = window.scrollY;
                let offset = sec.offsetTop;
                let height = sec.offsetHeight;
                let id = sec.getAttribute('id');

                if (top >= offset && top < offset + height) {
                    navActive.forEach(active => {
                        active.classList.remove('nav-active');
                        document.querySelector('.navbar [href*=' + id + ']').classList.add(
                            'nav-active');
                    });
                };
            });
        };
    </script>
@endsection
