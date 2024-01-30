<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Lazy;



class Products extends Component
{
    public $products;
    public $showForm=false;

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

    #[On('createProduct')]
    public function createProduct($data){
        Product::create($data);
        $this->products=Product::all();
        $this->showForm=false;
    }

    public function placeholder()
    {
        return view('spinner');
    }

    public function displayForm(){
        $this->showForm= !$this->showForm;
    }


    public function render()
    {
        return view('livewire.products');
    }
}
