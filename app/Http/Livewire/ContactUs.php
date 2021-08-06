<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function add_contact_us_request(){
        $this->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        \App\Models\contactus::create([
            'name'         => $this->name,
            'subject'         => $this->subject,
            'email'         => $this->email,
            'message'         => $this->message,
        ]);




        $this->email="";
        $this->name="";
        $this->subject="";
        $this->subject="";
        $this->message="";

        session()->flash('success', '');
    }


    public function render()
    {
        return view('livewire.contact-us');
    }
}
