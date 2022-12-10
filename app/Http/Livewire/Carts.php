<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Carts extends Component
{
    public $carts;
    public function mount($data)
    {
        $this->carts = $data;
    }

    public function render()
    {
        return view('livewire.carts');
    }
}
