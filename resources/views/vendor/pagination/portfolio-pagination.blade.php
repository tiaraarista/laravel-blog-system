@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation"
        class="flex items-center justify-between p-4 select-none border-slate-200 sm:px-6">

        {{-- Not use --}}
        <div class="flex justify-between flex-1 md:hidden">
            @if ($paginator->onFirstPage())
                {{-- previous disable --}}
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-400 dark:text-gray-600 bg-gray-200 dark:bg-gray-800 rounded-lg">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                {{-- previous enable --}}
                <a href="{{ $paginator->previousPageUrl() }}{{ '#portfolio' }}"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition rounded-lg text-white dark:text-white bg-blue-800 hover:bg-blue-700 hover:text-white">
                    {!! __('pagination.previous') !!}
                </a>
            @endif
            {{-- next enable --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}{{ '#portfolio' }}"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition rounded-lg text-white dark:text-white bg-blue-800 hover:bg-blue-700 hover:text-white">
                    {!! __('pagination.next') !!}
                </a>
            @else
                {{-- next disable --}}
                <span
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-400 dark:text-gray-600 bg-gray-200 dark:bg-gray-800 rounded-lg">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="flex-row flex-1 items-center justify-between sm:hidden md:flex">
            <div>
                <p
                    class="items-start justify-start text-xs font-semibold tracking-wide text-gray-500 uppercase dark:text-gray-400 ">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {{-- {!! __('results') !!} --}}
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex mt-2 lg:mt-0">
                    {{-- Previous Page Link Disable --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span
                                class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 rounded-l-lg"
                                aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @else
                        {{-- Previous Page Link Enable --}}
                        <a href="{{ $paginator->previousPageUrl() }}{{ '#portfolio' }}" rel="prev"
                            class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 transition rounded-l-lg text-gray-400 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                            aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 cursor-default">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links Disable --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-white bg-blue-800 border border-r-0 border-blue-800 rounded-md">{{ $page }}</span>
                                    </span>
                                @else
                                    {{-- Array Of Links Enable --}}
                                    <a href="{{ $url }}{{ '#portfolio' }}"
                                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 transition text-gray-400 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                                        aria-label="{{ __('pagination.goto_page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link Enable --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}{{ '#portfolio' }}" rel="next"
                            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 transition text-gray-400 dark:text-gray-400 rounded-r-lg hover:text-gray-600 dark:hover:text-gray-200"
                            aria-label="{{ __('pagination.next') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        {{-- Next Page Link Disable --}}
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span
                                class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-400 dark:text-gray-400 rounded-r-lg "
                                aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
