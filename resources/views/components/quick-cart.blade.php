<div class="">

    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
        <div class="flex items-start my-4">
            <input id="default-checkbox" type="checkbox" value=""
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <div class="mx-2 flex items-start gap-3">
              <img class="w-12 h-12" src="{{ asset('img/noteBook.jpg') }}" alt="">
              <div class="">
                <p class="font-normal text-slate-500 text-sm">Lorem, ipsum dolor.</p>
                <p class="font-bold text-sm">Rp43.000,00</p>
              </div>
            </div>
        </div>

    </div>



</div>
