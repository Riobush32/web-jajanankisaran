<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On; 
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Livewire\Attributes\Validate;

class ProductList extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[Validate('required|min:2')]
    public $product_name = '';

    #[Validate('required|min:2')]
    public $category = '';
    
    #[Validate('required|min:1')]
    public $price = '';

    #[Validate('required|min:2')]
    public $description = '';

    #[On('product-create')]
    public function updateProductList($product)
    {
        // ...
    }

    public function detail($id){
        $product = Product::find($id);
        
    }

    public function store()
    {
        $this->validate();
        $product = Product::create($this->all());

        $this->dispatch('product-create', $product); // Emit event correctly
        $this->reset(['product_name', 'category', 'price', 'description']); 
        session()->flash('productSave', 'Product successfully saved.');
    }


    public function render()
    {
        $data = Product::latest()->paginate(8);
        return view('livewire.product-list',[
            'productData' => $data
        ]);
    }
}
