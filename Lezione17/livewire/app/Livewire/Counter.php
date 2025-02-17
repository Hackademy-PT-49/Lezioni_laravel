<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    // tutti gli attributi pubblici della classe sono in condivisione con la vista
    public $counter =1;

    public $numero =1;
    public $users;

    public function increment($num){
        $this->counter +=$num;
    }
    public function decrement($num){
        $this->counter -=$num;
    }

    public function mount(){
        $this->users = User::all();
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.counter',compact('users'));
    }
}
