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

    public $formVisible = false;

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

    public function getProduct($id)
    {
        $this->formVisible = true;
        $this->dispatch('product-row', productId: $id); // Emit event correctly
    }
}