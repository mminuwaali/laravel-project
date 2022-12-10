<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminHeader extends Component
{
    public $show = false;
    public $menu = false;

    public function render()
    {
        return view('livewire.admin-header');
    }

    public function toggleAdminNav()
    {
        $this->show = !$this->show;
        dd($this->show);
    }

    public function toggleAdminMenu()
    {
        dd($this->show);
        // $this->show = !$this->show;
    }
}
