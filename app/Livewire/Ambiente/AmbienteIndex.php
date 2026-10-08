<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteIndex extends Component
{
    public function render()
    {
         $ambiente = Ambiente::all();
        return view('livewire.ambiente.ambiente-index', compact('ambiente'));
    }
}
