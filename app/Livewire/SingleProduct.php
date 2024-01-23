<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SingleProduct extends Component
{
    public $id;
    public $product;

    public function mount($id){
        $this->id=$id;
        $this->product=Http::get('https://fakestoreapi.com/products/'.$id)->json(); 
    }

    public function render()
    {
        return view('livewire.single-product');
    }
}
