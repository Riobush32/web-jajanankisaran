<x-layouts>

    <div class="md:flex gap-4">
        {{-- left  --}}
        <div class="w-full md:w-1/4 text-center bg-white rounded-xl p-2">
            <div class="w-full flex justify-center items-center">
                <div class="">
                    <img src="{{ asset('avatar/person1.jpeg') }}" alt="avatar">
                    <button type="button"
                        class="w-full py-2.5 px-5 me-2 my-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-xl border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Pilih
                        Foto</button>
                </div>

            </div>
            <div class="flex w-full items-center justify-center my-2">
                <h3 class="font-bold text-lg">Rio Sofhaniel Bush</h3>
            </div>
        </div>

        {{-- right  --}}
        <div class="w-full md:w-3/4 bg-white rounded-xl ">
            <div class="text-slate-600 relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Biodata
                    </caption>
                    <tbody>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama
                            </th>
                            <td class="px-6 py-4">
                                Rio Sofhaniel Bush <a class="text-cyan-500 cursor-pointer">Ubah</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tanggal Lahir
                            </th>
                            <td class="px-6 py-4">
                                30 April 2001 <a class="text-cyan-500">Ubah</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Jenis Kelamin
                            </th>
                            <td class="px-6 py-4">
                                Laki-laki <a class="text-cyan-500">Ubah</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Kontak
                    </caption>
                    <tbody>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Email
                            </th>
                            <td class="px-6 py-4">
                                riobush32@gmail.com <a class="text-cyan-500">Ubah</a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nomor Hp
                            </th>
                            <td class="px-6 py-4">
                                081362172097 <a class="text-cyan-500">Ubah</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-layouts>
