<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class RegistroEdit extends Component
{  
    public $sensor_id;
    public $valor;
    public $unidade;
    public $data_hora;
   
  
     public function mount($Id){
        $registro = Registro::find($Id);
        $this -> sensor_id = $registro->id;
        $this -> valor = $registro -> valor;
        $this -> unidade = $registro -> unidade;
        $this -> data_hora = $registro -> data_hora;
      }

      public function update(){
        $registro = Registro::find($this->registroid);
        $registro -> valor = $this -> valor;
        $registro -> unidade = $this -> unidade;
        $registro -> data_hora = $this -> data_hora;

        $registro->save();
        session()->flash('success', 'atualizado');
        return redirect()->route('ambiente.index');
      }


    
    public function render()
    {
        return view('livewire.registro.registro-edit');
    }
}
