<?php

namespace App\Http\Livewire;

use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Favicon extends Component
{
    public $count = 0;

    public function mount()
    {
        $this->count = Auth::user() ? count(Auth::user()->favorites) : 0;
    }

    public function render()
    {
        return view('livewire.favicon');
    }
}
