<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Navbar extends Component
{

    public function logout(){
       Auth::logout();
       $this->redirect('/login');
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
