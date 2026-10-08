<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class RegistroIndex extends Component
{
    public function render()
    {
        $registro = Registro::all();
        return view('livewire.registro.registro-index');
    }
}
