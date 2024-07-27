<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ProductCreate extends Component
{
    #[Validate('required|min:2')]
    public $product_name = '';

    #[Validate('required|min:2')]
    public $category = '';
    
    #[Validate('required|min:1')]
    public $price = '';

    #[Validate('required|min:2')]
    public $description = '';

    public function render()
    {
        return view('livewire.product-create');
    }

    public function store()
    {
        $this->validate();
        $product = Product::create($this->all());

        $this->dispatch('product-create', $product); // Emit event correctly
        $this->reset(['product_name', 'category', 'price', 'description']); 
        session()->flash('productSave', 'Product successfully saved.');
    }


}