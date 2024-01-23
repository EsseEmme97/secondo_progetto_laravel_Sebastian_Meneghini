<?php

use App\Livewire\Products;
use App\Livewire\SingleProduct;
use Illuminate\Support\Facades\Route;


Route::get('/', Products::class)->name('products');
Route::get('/product/{id}', SingleProduct::class)->name('singleProduct');