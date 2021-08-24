<?php

namespace App\Http\Livewire\Admin;
use App\Models\order as orderModel;
use Livewire\Component;

class Orders extends Component
{

    public function delete($id)
    {
        orderModel::find($id)->delete();
    }




    public function render()
    {
        return view('livewire.admin.orders',[
            'orders' => orderModel::latest()->paginate(20)
        ])->layout('admin.layouts.wire_app');
    }
}
