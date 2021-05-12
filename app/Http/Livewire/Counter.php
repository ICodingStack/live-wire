<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $number =100;

    public function increment(){
        $this->number++;
    }
    public function decremnt(){
        $this->number--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
