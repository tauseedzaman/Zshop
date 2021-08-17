<?php

namespace App\Http\Livewire\UserDashboard;
use App\Models\cart;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.user-dashboard.index',[
            'products' => cart::where('user_id',auth()->id())
        ]);
    }
}
