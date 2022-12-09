<?php

namespace App\Http\Livewire;

use App\Models\Slideshow as ModelsSlideshow;
use Livewire\Component;

class Slideshow extends Component
{
    public $index = 0;
    public $items = [
        ['title' => 'hello there from moscow'],
        ['title' => 'hello there from brazil'],
    ];

    public function mount()
    {
        // $this->items = ModelsSlideshow::all();
    }

    public function render()
    {
        return view('livewire.slideshow');
    }

    public function setIndex($value)
    {
        $this->index = $value;
    }
}
