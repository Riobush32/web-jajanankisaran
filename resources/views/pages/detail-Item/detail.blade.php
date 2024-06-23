<div class="w-full md:w-1/2">
    <div class="w-full " x-data="{showAbout:true, showServices:false}">
        <div class="p-5">
            <h3 class="md:hidden text-xl font-bold dark:text-white my-2">Rp20.000,00</h3>
            <h2 class="text-lg md:text-xl font-bold md:font-extrabold dark:text-white">Ellipsesinc - Kaos Oversize Pria Wanita NY - Putih</h2>
            <div class="my-2 flex items-center space-x-1 rtl:space-x-reverse">
                <span>Terjual</span> <span>30+</span>
                •
                <span>
                    <svg class="w-2 h2 md:w-4 md:h-4  text-yellow-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                </span>
                <span>4.6 <span class="text-slate-500">(30 rating)</span></span>
                •
                <span>
                    diskusi <span class="text-slate-500">(10)</span>
                </span>
            </div>
            <h3 class="hidden md:inline-block text-xl font-bold dark:text-white">Rp20.000,00</h3>
        </div>
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b  rounded-t-lg" id="defaultTab"
            data-tabs-toggle="#defaultTabContent" role="tablist">
            <li class="me-2">
                <button @click="showAbout = true, showServices = false" id="detail-tab" data-tabs-target="#detail" type="button" role="tab" aria-controls="about"
                    aria-selected="true"
                    class="inline-block p-4 text-cyan-600 rounded-ss-lg hover:bg-gray-100  dark:hover:bg-gray-700 dark:text-cyan-500">Detail</button>
            </li>
            <li class="me-2">
                <button @click="showAbout = false, showServices = true" id="services-tab" data-tabs-target="#services" type="button" role="tab"
                    aria-controls="services" aria-selected="false"
                    class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Info
                    Penting</button>
            </li>
        </ul>
        <div id="defaultTabContent">
            <div x-show="showAbout" class="p-4  rounded-lg md:p-8 " id="detail" role="tabpanel" aria-labelledby="detail-tab">
                <div>
                    <h1>Kondisi: Baru</h1>
                    <h1>Min. Pemesanan: 1 Buah</h1>
                    <h1>Etalase: Semua Etalase</h1>
                    <p>
                        T-Shirt Ellipsesinc. adalah salah satu lini pakaian terbaik dan berkualitas tinggi di antara
                        Local
                        Brand Indonesia. Dibuat dengan bahan katun yang nyaman dipakai untuk menemani harimu dan
                        memiliki
                        desain yang unik. Dapatkan tshirt dengan warna cantik ini untuk tampil menarik setiap saat!
                    </p>
                    <h1>Bahan : Katun</h1>
                    <h1>Ukuran:</h1>
                    <h1>OVERSIZE FIT TO XL</h1>
                    <h1>LD (lingkar dada): 100 cm</h1>
                    <h1>P (panjang): 70 cm</h1>
                    <h1>Toleransi setiap size 1-1½cm</h1>
                    <h1>Tersedia Warna :</h1>
                    <h1>putih</h1>
                </div>
            </div>
            <div x-show="showServices" class="p-4  rounded-lg md:p-8 " id="services" role="tabpanel" aria-labelledby="services-tab">
                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the
                    world’s potential</h2>
                <!-- List -->
                <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-cyan-600 dark:text-cyan-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="leading-tight">Dynamic reports and dashboards</span>
                    </li>
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-cyan-600 dark:text-cyan-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="leading-tight">Templates for everyone</span>
                    </li>
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-cyan-600 dark:text-cyan-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="leading-tight">Development workflow</span>
                    </li>
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-cyan-600 dark:text-cyan-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="leading-tight">Limitless business automation</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- toko --}}
    <div class="py-3 sm:py-4">
        <div class="flex items-start">
            <div class="flex-shrink-0 mt-2">
                <img class="w-8 h-8 rounded-full" src="{{ asset('img/noteBook.jpg') }}" alt="Neil image">
            </div>
            <div class="flex-1 min-w-0 ms-4">
                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                    Nama toko
                </p>
                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                    Online <span class="font-bold">12 menit yang lalu</span>
                </p>
                <p
                    class="text-sm text-gray-500 truncate dark:text-gray-400 flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <span> 4.7</span>
                </p>
                <p
                    class="text-sm text-gray-500 truncate dark:text-gray-400 flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                    <span class="material-symbols-outlined text-sm">
                        schedule
                    </span> <span class="text-sm"> ±3 jam <span class="font-bold text-slate-500">pesanan di proses
                        </span></span>
                </p>
            </div>
            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                <button
                    class="ml-4 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Follow
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>
