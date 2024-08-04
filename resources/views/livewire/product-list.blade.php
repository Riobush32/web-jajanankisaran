<div class="relative items-start">

    {{-- session  --}}
    <div class="absolute z-20 top-5 right-5">
        @include('components.session')
    </div>
    {{-- endsession  --}}
    {{-- read --}}
    @include('pages.product.read')
    {{-- endread --}}

    @if($formVisible)
        <div class="absolute z-10 top-0 w-full bg-slate-200 bg-opacity-50 rounded-lg">


            <div class="w-[90%] mx-auto mt-5 block relative p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
                x-data="{ editing: false }">

                <div class="px-4 sm:px-0">
                    <h3 class="text-base font-semibold leading-7 text-gray-900">{{ $formTitle }}</h3>
                    <div class="">
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">{{ $captions }}</p>
                    </div>
                    <div class="mt-5">
                        <label class="inline-flex items-center me-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" x-on:click="editing = !editing">
                            <div
                                class="relative w-9 h-5 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-teal-600">
                            </div>
                            <span class="ms-3 text-xs font-medium text-gray-900 dark:text-gray-300">Edit mode</span>
                        </label>
                    </div>
                </div>
                <div class="mt-6 border-t border-gray-100" x-data="{ mainImage:false }">
                    <dl class="divide-y divide-gray-100">

                        {{-- form product data  --}}
                        @include('pages.product.form-product-data')
                        {{-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ --}}
                        <div class="inline-flex items-center justify-center w-full">
                            <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
                            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                                <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                    <path
                                        d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                                </svg>
                            </div>
                        </div>

                        @include('pages.product.add-main-image')
                        {{-- galeri --}}
                        @include('pages.product.galery')
                        {{-- endgallery --}}



                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Attachments</dt>
                            <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                <span class="truncate font-medium">resume_back_end_developer.pdf</span>
                                                <span class="flex-shrink-0 text-gray-400">2.4mb</span>
                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="#"
                                                class="font-medium text-teal-600 hover:text-teal-500">Download</a>
                                        </div>
                                    </li>
                                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                <span
                                                    class="truncate font-medium">coverletter_back_end_developer.pdf</span>
                                                <span class="flex-shrink-0 text-gray-400">4.5mb</span>
                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="#"
                                                class="font-medium text-teal-600 hover:text-teal-500">Download</a>
                                        </div>
                                    </li>
                                </ul>
                            </dd>
                        </div>
                    </dl>
                </div>
                <button type="button" wire:click="close"
                    class="absolute top-7 right-7 z-10 text-slate-700 border border-slate-700 hover:bg-slate-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-full text-sm py-1 px-1.5 text-center inline-flex items-center dark:border-slate-500 dark:text-slate-500 dark:hover:text-white dark:focus:ring-slate-800 dark:hover:bg-slate-500">
                    <span class="material-symbols-outlined text-sm">
                        close
                    </span>
                </button>
            </div>
        </div>
    @endif

</div>
