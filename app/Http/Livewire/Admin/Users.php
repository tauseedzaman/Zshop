<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function delete($id)
    {
        user::find($id)->delete();
        session()->flash('message','Customer Deleted Successfully!');
    }
    public function render()
    {
        return view('livewire.admin.users',[
            'customers' => User::where('full_name','LIKE','%'.$this->search.'%')
            ->latest()->paginate(50)
        ])->layout('admin.layouts.wire_app');
    }
}
