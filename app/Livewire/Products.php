<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Products extends Component
{
    public $products;

    public function mount()
    {
        $data = Http::get('https://fakestoreapi.com/products')->json();
        $this->products = $data;
    }

    public function placeholder()
    {
        return view('spinner');
    }


    public function render()
    {
        return view('livewire.products');
    }
}
