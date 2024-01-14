<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Counter extends Component
{
//    protected $listner = ['addTocart' => 'checkCart'];
    public $counter;

    public function checkCart()
    {
        if (auth()->check()) {
            return
                $this->counter = Cart::where('user_id',auth()->user()->id)->count();
        } else {
            return 0;
        }


    }


    public function render()
    {
        $this->counter=$this->checkCart();
        return view('livewire.counter',
            [
                'cartCount'=>$this->counter

            ]);
    }
}
