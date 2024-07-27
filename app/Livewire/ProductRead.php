<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On; 
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class ProductRead extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[On('product-create')]
    public function updateProductList($product)
    {
        // ...
    }

    public function render()
    {
        $data = Product::latest()->paginate(8);
        return view('livewire.product-read',[
            'productData' => $data
        ]);
    }
}