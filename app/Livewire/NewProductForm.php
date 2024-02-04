<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewProductForm extends Component
{
    use WithFileUploads;

    public $title;
    public $category;
    public $description;
    public $price;
    public $image;
    public $imageFile;

    public function store () {

        $this->validate([
            'title'=>'required|min:3',
            'category'=>'required|min:3',
            'description'=>'required|min:10',
            'price'=>'required|numeric',
            'imageFile'=>'mimes:jpg,bmp,png'
        ]);
       

        $data=['title'=>$this->title,
            'category'=>$this->category,
            'description'=>$this->description,
            'price'=>$this->price,
            'image'=>$this->imageFile->store('public/photos'),
            'user_id'=>Auth::id()
            ];


            if ($this->imageFile) {
                $data['image'] = $this->imageFile->store('photos');
            } elseif ($this->image) {
                $data['image'] = $this->image;
            }
        
            $this->dispatch('createProduct', data:$data);

    }

    public function render()
    {
        return view('livewire.new-product-form');
    }
}
