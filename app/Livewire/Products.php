<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Products extends Component
{
    public $products;

    public function mount()
    {
        // $data = Http::get('https://fakestoreapi.com/products')->json();

        // foreach ($data as $element) {
        //     $newProduct= new Product();
        //     $newProduct->title=$element['title'];
        //     $newProduct->price=$element['price'];
        //     $newProduct->description=$element['description'];
        //     $newProduct->category=$element['category'];
        //     $newProduct->image=$element['image'];
        //     $newProduct->rate=$element['rating']['rate'];
        //     $newProduct->save();
        // }
        $this->products = Product::all();
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
