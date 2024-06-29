<div class="fixed bottom-0 left-0 z-20 w-full rounded-t-lg p-4 bg-white" x-data="{ addCart: false }">
    <div class="" x-show="addCart">
        <div class="flex items-center mb-3">
            <button @click="addCart=false" type="button" class="text-black p-2 cursor-pointer flex items-center">
                <span class="material-symbols-outlined">
                    close
                </span>
            </button>
            <span class="font-bold">
                Varian produk
            </span>
        </div>
        <div class="">
            @include('pages.detail-Item.varian-product')
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
            <div class="text-lg font-bold text-gray-900 dark:text-white w-full mb-2">Rp 1.000.000,00</div>


        </div>
        <div class="flex">
            <button
                class="grow-0 inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                <span
                    class="relative px-2 py-1 transition-all ease-in duration-75 text-cyan-500 hover:text-white bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    <span class="material-symbols-outlined ">
                        chat
                    </span>
                </span>
            </button>
            <button
                class="grow inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium  rounded-lg group ring-2 focus:ring-4 outline-none ring-cyan-500 dark:focus:ring-cyan-800 text-cyan-500">
                Buy
            </button>
            <button
                class="grow text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                Add to cart
            </button>
        </div>
    </div>


    <div class="flex md:hidden" x-show="!addCart">
        <button
            class="grow-0 inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span
                class="relative px-2 py-1 transition-all ease-in duration-75 text-cyan-500 hover:text-white bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <span class="material-symbols-outlined ">
                    chat
                </span>
            </span>
        </button>
        <button @click="addCart=true"
            class="grow inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium  rounded-lg group ring-2 focus:ring-4 outline-none ring-cyan-500 dark:focus:ring-cyan-800 text-cyan-500">
            Buy
        </button>
        <button @click="addCart=true"
            class="grow text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Add to cart
        </button>
    </div>
</div>
