

<div class="relative overflow-x-auto shadow-md sm:rounded-lg" id="paginated-product">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Our products 
            <button @click="add = true; detail = false" class="bg-teal-100 text-teal-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-teal-400 border border-teal-400">
                add new product
            </button>
            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more. </p>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productData as $row)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $row->product_name }}
                </th>
                <td class="px-6 py-4">
                    {{ $row->category }}
                </td>
                <td class="px-6 py-4">
                    Rp {{ number_format($row->price,2,',','.') }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#paginated-product" @click="detail = true; add = false" wire:click="getProduct({{ $row->id }})"  class="font-medium text-teal-600 dark:text-teal-500 hover:underline" >detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="p-3">
        {{ $productData->links(data: ['scrollTo' => '#paginated-product']) }}
    </div>
</div>
