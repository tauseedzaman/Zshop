<?php

namespace App\Http\Livewire\UserDashboard;
use App\Models\order;
use Livewire\Component;

class Orders extends Component
{
    public function render()
    {
        return view('livewire.user-dashboard.orders',[
            'products' => order::where('user_id',auth()->id())->get()
        ]);
    }
}
