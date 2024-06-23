<div class="fixed  border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="px-5 py-5">
        <span>
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Atur Jumlah dan Catatan</h5>
        </span>
        <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="my-2">
            <h3 class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran</h3>
            <ul class="flex flex-wrap w-full gap-2">
                <li>
                    <input type="radio" id="xl" name="ukuran" value="xl" class="hidden peer" required />
                    <label for="xl"
                        class="inline-flex items-center justify-between w-full p-2 text-gray-500  border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-cyan-500 peer-checked:border-cyan-600 peer-checked:text-cyan-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-sm font-semibold">XL</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="l" name="ukuran" value="l" class="hidden peer">
                    <label for="l"
                        class="inline-flex items-center justify-between w-full p-2 text-gray-500  border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-cyan-500 peer-checked:border-cyan-600 peer-checked:text-cyan-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-sm font-semibold">L</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="m" name="ukuran" value="m" class="hidden peer">
                    <label for="m"
                        class="inline-flex items-center justify-between w-full p-2 text-gray-500  border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-cyan-500 peer-checked:border-cyan-600 peer-checked:text-cyan-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-sm font-semibold">M</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="s" name="ukuran" value="s" class="hidden peer">
                    <label for="s"
                        class="inline-flex items-center justify-between w-full p-2 text-gray-500  border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-cyan-500 peer-checked:border-cyan-600 peer-checked:text-cyan-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-sm font-semibold">S</div>
                        </div>
                    </label>
                </li>
            </ul>

        </div>
        <div class="my-2">
            <h3 class="mb-2 text-sm font-medium text-gray-900 dark:text-white">warna</h3>
            <ul class="flex flex-wrap w-full gap-2">
                <li>
                    <input type="radio" id="putih" name="warna" value="putih" class="hidden peer" required />
                    <label for="putih"
                        class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-cyan-500 peer-checked:border-cyan-600 peer-checked:text-cyan-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-sm font-semibold">putih</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="merah" name="warna" value="merah" class="hidden peer">
                    <label for="merah"
                        class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-cyan-500 peer-checked:border-cyan-600 peer-checked:text-cyan-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-sm font-semibold">merah</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="hitam" name="warna" value="hitam" class="hidden peer">
                    <label for="hitam"
                        class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-sm font-semibold">hitam</div>
                        </div>
                    </label>
                </li>
            </ul>

        </div>
        <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="grid grid-cols-2 gap-2 my-2">
            <div class="">
                <form class="mx-auto">
                    <div class="relative flex items-center max-w-[8rem]">
                        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-1 h-7 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                        <input type="text" id="quantity-input" data-input-counter
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border-x-0 border-gray-300 h-7 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="999" required />
                        <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                            class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-1 h-7 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
            <div class="">
                <span class="text-slate-500">Stok 500</span>
            </div>
        </div>

        <div class="my-2" x-data="{ catatan: false }">
            <div x-show="!catatan" @click="catatan = true"
                class="font-medium text-cyan-600 dark:text-cyan-500 flex items-center cursor-pointer mb-2">
                <span class="material-symbols-outlined">edit</span>
                Tambah catatan
            </div>
            <div @click="catatan = false" x-show="catatan"
                class="font-medium text-rose-600 dark:text-rose-500 flex items-center cursor-pointer mb-2">
                Batalkan Catatan
            </div>
            <textarea x-show="catatan" id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-cyan-500 focus:border-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500"
                placeholder="Tulis Catatanmu disini..."></textarea>
        </div>
        <div class="items-center justify-between my-3">
          <div class="">subtotal</div>
            <div class="text-xs md:text-lg font-bold text-gray-900 dark:text-white w-full mb-2">Rp 1.000.000,00</div>
            
            <button type="button"
                class="w-full text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                Add to cart
            </button>
            <button type="button"
                class="w-full text-cyan-700 hover:text-white border border-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg md:text-sm text-xs md:px-5 px-3 md:py-2.5 py-1 text-center md:me-2 me-1 md:mb-2 mb-1 dark:border-cyan-500 dark:text-cyan-500 dark:hover:text-white dark:hover:bg-cyan-500 dark:focus:ring-cyan-800">
                Buy
            </button>
        </div>
    </div>
</div>
