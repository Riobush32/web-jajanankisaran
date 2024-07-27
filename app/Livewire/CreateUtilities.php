<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Utilities;

class CreateUtilities extends Component
{ 
    public $utilities;
    public function render()
    {
    return view('livewire.create-utilities');
    }

    public function store(){
        $this->validate([
        "utilities" => 'required|string',
        ]);

        Utilities::create([
        'utility_name' => $this->utilities,
        ]);

        session()->flash('utilitysave', 'utility successfully save.');
    }
}
