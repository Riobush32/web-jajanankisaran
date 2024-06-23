<x-layouts>

    <div class="flex flex-wrap justify-center w-full md:gap-3 ">

        <div class="gap-4 hidden md:flex ">
            <div class="w-4/5">
                <div class="flex gap-4">
                    @include('pages.detail-item.product')
                    @include('pages.detail-item.detail')
                </div>
                <hr class="w-4/5 h-1 mx-auto my-4 bg-cyan-300 border-0 rounded md:my-10 dark:bg-gray-700">
                <div class="flex gap-4 mt-5">
                    @include('pages.detail-Item.rating-detail')
                    <div class="w-3/5 ">
                        @for ($i = 0; $i < 10; $i++)
                            @include('pages.detail-Item.rating-coment')
                        @endfor
                    </div>
                </div>

            </div>


            <div class="w-1/5 relatif">
                @include('pages.detail-Item.add-card')
            </div>
        </div>
        <div class="">
            <div class="p-2">
                @include('pages.detail-Item.product')
            </div>
            @include('pages.detail-Item.detail')
            <div class="text-center">
                @include('pages.detail-Item.rating-detail')
                <div class="p-4 text-left">
                    @for ($i = 0; $i < 10; $i++)
                        @include('pages.detail-Item.rating-coment')
                    @endfor
                </div>
            </div>

            @include('pages.detail-Item.add-cart-mobile')
        </div>




    </div>
</x-layouts>
