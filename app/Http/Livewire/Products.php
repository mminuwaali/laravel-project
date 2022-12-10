<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Products extends Component
{
    public $show;
    public $products;

    public function mount($data, $show = false)
    {
        $this->show = $show;
    }
    public function render()
    {
        return view('livewire.products');
    }
}
