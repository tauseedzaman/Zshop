<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return view('livewire.admin.product')->layout('admin.layouts.app');
    }
}
