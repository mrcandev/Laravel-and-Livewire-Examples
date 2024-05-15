<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    // Property to store the count value
    public $count = 1453;

    // Method to increment the count value
    public function increment()
    {
        $this->count++;
    }

    // Method to decrement the count value
    public function decrement()
    {
        $this->count--;
    }

    // Method to render the Livewire component
    public function render()
    {
        // Render the Livewire component view
        return view('livewire.counter');
    }
}
