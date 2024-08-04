@if($formType == 'add')
<form  wire:submit.prevent="storeProduct">
    @csrf

@endif
@if($formType == 'detail')
<form  wire:submit.prevent="updateProduct">
    @csrf
<input type="hidden" wire:model="productId">
@endif

    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Product Name </dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
            <input x-bind:disabled="!editing" type="text" wire:model="product_name"
                value="{{ $product_name }}"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-600 peer"
                placeholder=" " required />
        </dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0 items-center">
        <dt class="text-sm font-medium leading-6 text-gray-900">Category</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
            <input x-bind:disabled="!editing" type="text" name="caregory" id="caregory"
                wire:model="category" 
                class="block py-2.5 px-0 w-full text-sm leading-6 text-gray-700 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-600 peer"
                required />
        </dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Price</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
            <input x-bind:disabled="!editing" type="number"  name="price" id="price"
                wire:model="price"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-600 peer"
                placeholder=" " required />
        </dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Description</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
            <input id="x" type="hidden" name="content" value="{{ $description }}">
            <trix-editor input="x" wire:model="description"></trix-editor>
        </dd>
    </div>
    <div class="flex justify-center px-4 py-6 sm:gap-4 sm:px-0" x-show="editing">
        <button type="submit"
            class="text-white bg-gradient-to-r from-teal-500 to-yellow-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Save</button>
    </div>
</form>