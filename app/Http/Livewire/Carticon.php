<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Carticon extends Component
{
    public $count = 0;

    public function mount()
    {
        $this->count = Auth::user() ? count(Auth::user()->carts) : 0;
    }
    public function render()
    {
        return view('livewire.carticon');
    }
}
