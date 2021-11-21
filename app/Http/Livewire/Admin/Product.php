<?php

namespace App\Http\Livewire\Admin;

use App\Models\category;
use App\Models\product as productModel;
use App\Models\product_category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Product extends Component
{

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name;
    public $description;
    public $weight;
    public $stock;
    public $category;
    public $price;
    public $image;
    public $edit_image;
    public $thumbnail;
    public $edit_thumbnail;
    public $edit_product_id;
    public $button_text = "Add New Product";


    public function add_new_product()
    {
        if ($this->edit_image || $this->edit_thumbnail) {

            $this->update($this->edit_product_id);

        }else{
            $this->validate([
                'name' => 'required|max:50',
                'description' => 'required|max:255',
                'stock' => 'required|numeric',
                'weight' => 'required|numeric',
                'price' => 'required|numeric',
                'image' => 'required|image',
                'category' => 'required',
                'thumbnail' => 'required|image',
            ]);

            $product = productModel::create([
                'name'        => $this->name,
                'stock'       => $this->stock,
                'weight'        => $this->weight,
                'price'        => $this->price,
                'thumbnail'  => $this->storeImage($this->thumbnail),
                'image'  => $this->storeImage($this->image),
                'description' => $this->description,
                'category_id' => $this->category,
            ]);

            $this->name="";
            $this->description="";
            $this->image="";
            $this->thumbnail="";
            $this->category="";
            $this->price="";
            $this->stock="";
            $this->weight="";

            session()->flash('message', 'Created successfully.');
        }

    }

    public function storeImage($img)
    {
        if (!$img) {
            return null;
        }
        $image   = ImageManagerStatic::make($img)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $image);
        return 'storage/'.$name;
    }

    public function edit($id)
    {
        $product = productModel::findOrFail($id);
        $this->edit_product_id = $id;
        $this->name           = $product->name;
        $this->price          = $product->price;
        $this->weight         = $product->weight;
        $this->stock          = $product->stock;
        $this->category       = $product->category_id;
        $this->description    = $product->description;
        $this->edit_image     = $product->image;
        $this->edit_thumbnail = $product->thumbnail;
        $this->button_text     ="Update Product";
    }
    public function update($id)
    {
        $this->validate([
            'name' => 'required|max:50',
            'description' => 'required|max:255',
            'stock' => 'required|numeric',
            'weight' => 'required|numeric',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);

        $product = productModel::findOrFail($id);
        $product->name = $this->name;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->weight = $this->weight;
        $product->stock = $this->stock;
        $product->category_id = $this->category;

        if ($this->image) {
            $this->validate([
                'image' => 'image|max:3072',
            ]);
            unlink($product->image);
            $product->image = $this->storeImage($this->image);

        }
        if ($this->thumbnail) {
            $this->validate([
                'thumbnail' => 'image|max:3072',
            ]);
            unlink($product->thumbnail);
            $product->thumbnail = $this->storeImage($this->thumbnail);

        }

        $product->save();

            $this->name="";
            $this->description="";
            $this->image="";
            $this->thumbnail="";
            $this->category="";
            $this->price="";
            $this->stock="";
            $this->weight="";;
            $this->edit_image="";
            $this->edit_thumbnail="";

        session()->flash('message', 'Updated Successfully.');
        $this->button_text = "Add New Product";

    }

    public function delete($id)
    {
        product_category::where('product_id' , $id)->delete();
        $product = productModel::findOrFail($id);

        if($product->thumbnail){
            unlink($product->thumbnail);
        }
        if ($product->image) {
            unlink($product->image);
        }

        $product->delete();
        session()->flash('message', 'Deleted Successfully.');
    }

    public function render()
    {
        return view('livewire.admin.product',[
            'products' => productModel::latest()->paginate(30),
            'categories' => category::all()
        ])->layout('admin.layouts.wire_app');
    }
}
