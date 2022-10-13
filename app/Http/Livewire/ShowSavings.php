<?php

namespace App\Http\Livewire;

use App\Models\Saving;
use Livewire\Component;

class ShowSavings extends Component
{
    public function render()
    {

        $savings = Saving::all();
        return view('livewire.show-savings', compact('savings'));
    }
}
