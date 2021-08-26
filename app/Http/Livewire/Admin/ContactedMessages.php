<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use App\Models\contactus;
use Livewire\Component;

class ContactedMessages extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;



    public function render()
    {
        return view('livewire.admin.contacted-messages',[
            'clients' => contactus::where('name','LIKE','%'.$this->search.'%')
            ->latest()->paginate(50)
        ])->layout('admin.layouts.wire_app');
    }
}
