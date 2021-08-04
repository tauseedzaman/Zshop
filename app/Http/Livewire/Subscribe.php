<?php

namespace App\Http\Livewire;

use App\Models\subscriber;
use Livewire\Component;

class Subscribe extends Component
{
    public $email;

    public function add_subscriber()
    {
        $this->validate([
            'email' => 'required|email|unique:subscribers,email,except,id',
        ]);
        subscriber::create([
            'email'         => $this->email,
        ]);

        $this->email="";

        session()->flash('message', 'Email Added successfully.');
    }

    public function render()
    {
        return view('livewire.subscribe');
    }
}
