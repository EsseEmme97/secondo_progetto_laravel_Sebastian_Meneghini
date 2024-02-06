<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\Attributes\On;

class SingleProduct extends Component
{
    public Product $product;
    public $showUpdateForm;

    #[On('showForm')]
    public function showForm(){
        $this->showUpdateForm=!$this->showUpdateForm;
    }

    public function mount($id){
        $this->product=Product::findOrFail($id);
    }

    public function placeholder()
    {
        return view('spinner');
    }

    public function deleteProduct(){
        Product::destroy($this->product->id);
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.single-product');
    }
}
