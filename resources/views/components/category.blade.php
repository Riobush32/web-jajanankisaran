<div id="animation-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-28 overflow-hidden rounded-lg md:h-44">
        <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <div class="flex w-full items-center justify-between">
                @for ($i = 1; $i <= 7; $i++)
                                    {{-- categories --}}
                <div
                    class="m-2 p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-32 flex flex-col items-center pb-10 p-3">
                        <img class="md:w-12 md:h-12 mb-3 rounded-full shadow-lg"
                            src="{{ asset('img/noteBook.jpg') }}" alt="Bonnie image" />
                        <h5 class="text-md font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                        {{-- <span class="mt-1 text-sm text-gray-500 dark:text-gray-400">Visual Designer</span> --}}
                    </div>
                </div>
                @endfor

            </div>
        </div>
        <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <div class="flex w-full items-center justify-between">
                @for ($i = 1; $i <= 7; $i++)
                                    {{-- categories --}}
                <div
                    class="m-2 p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-32 flex flex-col items-center pb-10 p-3">
                        <img class="md:w-12 md:h-12 mb-3 rounded-full shadow-lg"
                            src="{{ asset('img/noteBook.jpg') }}" alt="Bonnie image" />
                        <h5 class="text-md font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                        {{-- <span class="mt-1 text-sm text-gray-500 dark:text-gray-400">Visual Designer</span> --}}
                    </div>
                </div>
                @endfor

            </div>
        </div>
        <!-- Item 1 -->
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-slate-300 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-slate-300 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
