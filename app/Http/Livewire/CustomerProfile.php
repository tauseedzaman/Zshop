<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;

class CustomerProfile extends Component
{
    use WithFileUploads;

    public $photo;

    public function UpdatedPhoto()
    {
        $current_user = user::find(auth()->id());
        if ($current_user->photo) 
        {
            unlink($current_user->photo);
        }
        $current_user->photo = $this->storeImage($this->photo);
        $current_user->save();
        unset($this->photo);
        session()->flash('message', 'Profile Update successfully. Prefresh Page.');

    }

    public function storeImage($photo)
    {
        if (!$photo) {
            return null;
        }
        $image   = ImageManagerStatic::make($photo)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $image);
        return 'storage/'.$name;
    }



    public function render()
    {
        return view('livewire.customer-profile');
    }
}
