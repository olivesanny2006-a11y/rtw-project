<?php

namespace App\Livewire\Customer;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.customers.app',['title'=>"Actualités"])]
class Actuality extends Component
{
    public function render()
    {
        return view('livewire.customer.actuality');
    }
}
