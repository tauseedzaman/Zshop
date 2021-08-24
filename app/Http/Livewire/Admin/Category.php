<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Category extends Component
{
    use WithFileUploads;
        use WithPagination;
        protected $paginationTheme = 'bootstrap';
    public $name;
    public $description;
    public $thumbnail;
    public $edit_thumbnail;
    public $edit_category_id;
    public $button_text = "Create Categroy";



    public function add_new_category()
    {
        if ($this->edit_thumbnail) {

            $this->update($this->edit_category_id);

        }else{

            $this->validate([
                'name' => 'required|min:4|max:50',
                'description' => 'required',
                'thumbnail' => 'required|image',
            ]);

            \App\Models\category::create([
                'name'          => $this->name,
                'description'         => $this->description,
                'thumbnail'        =>   $this->storeImage($this->thumbnail),

            ]);

            $this->name="";
            $this->description="";
            $this->thumbnail="";

            session()->flash('message', 'Category Created successfully.');
        }

    }

    public function storeImage($thumbnail)
    {
        if (!$thumbnail) {
            return null;
        }
        $image   = ImageManagerStatic::make($thumbnail)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $image);
        return 'storage/'.$name;
    }


    /*
    * Edit Category by id
    */
    public function edit($id)
    {
        $category = \App\Models\category::findOrFail($id);
        $this->edit_category_id = $id;

        $this->name = $category->name;
        $this->description = $category->description;
        $this->edit_thumbnail    = $category->thumbnail;

        $this->button_text="Update Categroy";
    }

    
    /*
    * Update Category by id
    */
    public function update($id)
    {
        $this->validate([
            'name' => 'required|max:50',
            'description' => 'required',
        ]);
        
        $category = \App\Models\category::findOrFail($id);
        $category->name = $this->name;
        $category->description = $this->description;
        if ($this->thumbnail) {
            $this->validate([
                'thumbnail' => 'image',
            ]);
               
            if($category->thumbnail){
                unlink($category->thumbnail);
            }

            $category->thumbnail = $this->storeImage($this->thumbnail);
        }
        $category->save();

        $this->name="";
        $this->description="";
        $this->thumbnail="";
        $this->edit_thumbnail="";
        $this->edit_category_id="";
        session()->flash('message', 'Cateogry Updated Successfully.');

        $this->button_text = "Create Categroy";

    }

    public function delete($id)
    {
        $category = \App\Models\category::findOrFail($id);
        if($category->thumbnail){
            unlink($category->thumbnail);
        }
        $category->delete();
        session()->flash('message', 'Category Deleted Successfully.');

        $this->name="";
        $this->description="";
        $this->thumbnail="";
    }

    public function render()
    {
        return view('livewire.admin.category',[
            'categories' => \App\Models\category::latest()->paginate(3)
        ])->layout('admin.layouts.wire_app');
    }
}
