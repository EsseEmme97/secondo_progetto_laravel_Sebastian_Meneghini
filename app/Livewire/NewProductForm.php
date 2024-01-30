<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class NewProductForm extends Component
{

    public $title;
    public $category;
    public $description;
    public $price;
    public $image;

    public function store () {
        $data=['title'=>$this->title,
            'category'=>$this->category,
            'description'=>$this->description,
            'price'=>$this->price,
            'image'=>$this->image];
        
        $this->dispatch('createProduct', data:$data);

    }

    public function render()
    {
        return view('livewire.new-product-form');
    }
}
