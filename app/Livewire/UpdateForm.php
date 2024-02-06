<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Component;

class UpdateForm extends Component
{
    use WithFileUploads;

    public $id;
    public $title;
    public $category;
    public $description;
    public $price;
    public $image;
    public $imageFile;

    public function mount($product){
        $this->id=$product->id;
        $this->title=$product->title;
        $this->category= $product->category;
        $this->description=$product->description;
        $this->price=$product->price;
        $this->imageFile=$product->image;
    }

    public function updateProduct(){

        $this->validate([
            'title' => 'required|min:3',
            'category' => 'required|min:3',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'imageFile' => 'image|max:1024'
        ]);


        $data = [
            'userId' => Auth::id(),
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $this->imageFile->store('public/photos'),
        ];

        Product::where('id',$this->id)->update($data);

        $this->dispatch('showForm');
    }

    public function render()
    {
        return view('livewire.update-form');
    }
}
