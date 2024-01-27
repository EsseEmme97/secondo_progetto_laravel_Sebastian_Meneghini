<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SingleProduct extends Component
{
    public Product $product;

    public function mount($id){
        $this->product=Product::findOrFail($id);
    }

    public function placeholder()
    {
        return view('spinner');
    }

    public function render()
    {
        return view('livewire.single-product');
    }
}
