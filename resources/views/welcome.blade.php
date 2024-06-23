<x-layouts>



<x-banner></x-banner>
<div class="flex flex-wrap justify-center w-full md:gap-3 ">
<x-category></x-category>

@for ($i = 0; $i < 7; $i++)
    <x-cart-items></x-cart-items>
@endfor
</div>
</x-layouts>
