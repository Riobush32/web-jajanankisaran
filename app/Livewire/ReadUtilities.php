<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Utilities;

class ReadUtilities extends Component
{
    public function render()
    {
        $data = Utilities::all();
        return view('livewire.read-utilities', [
            'dataUtilities' => $data,
        ]);
    }
}
