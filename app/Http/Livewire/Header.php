<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $show =  false;

    public function render()
    {
        return view('livewire.header');
    }

    public function toggle()
    {
        $this->show = !$this->show;
    }
}
