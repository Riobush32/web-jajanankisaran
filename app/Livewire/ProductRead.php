<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On; 

class ProductRead extends Component
{
    #[On('product-create')]
    public function updateProductList($product)
    {
        // ...
    }

    public function render()
    {
        $data = Product::latest()->paginate(10);
        return view('livewire.product-read',[
            'productData' => $data
        ]);
    }
}