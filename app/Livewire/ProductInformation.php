<?php

namespace App\Livewire;
use Livewire\Attributes\On;
use App\Models\Product;
use Livewire\Component;
use function Livewire\Volt\{on};

class ProductInformation extends Component
{
    public $product_name;
    public $category;
    public $price;
    public $description;

    #[On('product-row')]
    public function editProduct($productId)
    {
        $product = Product::find($productId);
        $this->product_name = $product->product_name;
        $this->category = $product->category;
        $this->price = $product->price;
        $this->description = $product->description;
    }


    

    // public function mount($product)
    // {
    //     $this->id = $product['id'];
    //     $this->product_name = $product['product_name'];
    //     $this->category = $product['category'];
    //     $this->price = $product['price'];
    //     $this->description = $product['description'];
    // }

    public function render()
    {
        return view('livewire.product-information');
    }


}