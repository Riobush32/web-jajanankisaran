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

    #[Validate('required')]
    public $product_name = '';

    #[Validate('required')]
    public $category = '';
    
    #[Validate('required')]
    public $price = '';

    #[Validate('required')]
    public $description = '';

    public $formVisible = false;
    public $formType = '';
    public $formTitle = '';
    public $captions = '';
    public $productId;

    #[On('product-detail')]
    public function detail($id){
        $product = Product::find($id);
        $this->product_name = $product->product_name;
        $this->category = $product->category;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->productId = $product->id;
        $this->formVisible = true;
        $this->formType = 'detail';
        $this->formTitle = 'Product Information';
        $this->captions = 'detail of your product';

    }

    public function add(){
        $this->reset();
        $this->formVisible = true;
        $this->formType = 'add';
        $this->formTitle = 'Add New Product';
        $this->captions = 'buatlah produk mu sebagus mungkin';
    }

    public function close(){
        $this->formVisible = false;
        $this->reset(['product_name', 'category', 'price', 'description']);  // Reset form fields
        $this->resetValidation(); // Reset validation error messages
    }

    public function storeProduct(){
        // $this->validate();
        Product::create([
            'product_name' => $this->product_name,
            'category' => $this->category,
            'price' => $this->price,
            'description' => $this->description,
        ]);
        $this->reset(['product_name', 'category', 'price', 'description']);
        session()->flash('success', 'Product successfully save.');
        $this->close();
    }

    public function updateProduct()
    {
        $product = Product::find($this->productId);
        $product->update([
            'product_name' => $this->product_name,
            'category' => $this->category,
            'price' => $this->price,
            'description' => $this->description,
        ]);
        session()->flash('edit', 'Product successfully edit.');
        $this->close();
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
            'productData' => $data,
            'formVisible' => $this->formVisible
        ]);
    }
}
