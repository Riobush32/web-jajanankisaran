<div class="p-2">
    <div x-data="{ catatan: false }" class="">
        <div
            class="m-2 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-1 border-cyan-300">
            {{-- info toko --}}
            <div class="flex">
                <div class="flex items-center h-5">
                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </div>
                <div class="ms-2 text-sm">
                    <label for="helper-checkbox" class="font-medium text-gray-900 dark:text-gray-300">Toko Bude</label>
                    <p id="helper-checkbox-text" class="text-xs font-normal text-gray-500 dark:text-gray-300"> <span
                            class="text-teal-300">bebas ongkir</span> Rp20.000,00</p>
                </div>
            </div>
            {{-- info product --}}
            <div class="">
                <div class="flex items-start my-4">
                    <input id="default-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <div class="mx-2 flex items-start gap-3">
                        <img class="w-16 h-16" src="{{ asset('img/noteBook.jpg') }}" alt="">
                        <div class="">
                            <p class="font-normal text-slate-500 text-sm">Lorem, ipsum dolor.</p>
                            <p class="font-bold text-sm">Rp43.000,00</p>
                            <div class="my-2 grid grid-cols-2">
                                <div class="grid grid-cols-2 text-slate-400">
                                    <button @click="catatan = !catatan" class="">
                                        <span class="material-symbols-outlined">
                                            contract_edit
                                        </span>
                                    </button>
                                    <button  class="text-rose-400">
                                        <span class="material-symbols-outlined ">
                                            favorite
                                        </span>
                                    </button>
                                </div>
                                <div x-data="{ value: 1 }"
                                    class="w-20 grid grid-cols-3 border-slate-400 border-2 rounded-full text-sm text-center">
                                    <template x-if="value<= 1">
                                        <button class="flex items-center justify-center">
                                            <span class="material-symbols-outlined text-sm font-bold">
                                                delete
                                            </span>
                                        </button>
                                    </template>
                                    <template x-if="value > 1">
                                        <button @click="value -= 1" class="flex items-center justify-center">
                                            <span class="material-symbols-outlined text-sm font-bold">
                                                remove
                                            </span>
                                        </button>
                                    </template>
                                    <div class="flex items-center justify-center"><span x-text="value"></span></div>
                                    <button @click="value += 1" class="flex items-center justify-center">
                                        <span class="material-symbols-outlined text-sm font-bold">
                                            add
                                        </span>
                                    </button>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div x-show="catatan" x-transition class="">

                <form>
                    <div class="flex items-center px-3 py-2 rounded-lg">
                        <textarea id="chat" rows="1"
                            class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your message..."></textarea>
                        <button type="submit"
                            class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                            <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path
                                    d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                            </svg>
                            <span class="sr-only">Send message</span>
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>




</div>
