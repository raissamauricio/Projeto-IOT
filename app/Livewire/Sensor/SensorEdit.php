<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $sensorId;

     public function mount($Id){
        $sensor = Sensor::find($Id);
        $this -> ambiente_id = $sensor->id;
        $this -> codigo = $sensor -> codigo;
        $this -> tipo = $sensor -> tipo;
        $this -> descricao = $sensor -> descricao;
        $this -> status = $sensor -> status;
      }

      public function update(){
        $sensor = Sensor::find($this->sensorId);
        $sensor -> codigo = $this -> codigo;
        $sensor -> tipo = $this -> tipo;
        $sensor -> descricao = $this -> descricao;
        $sensor -> status = $this -> status;
        $sensor -> sensorId = $this -> sensorId; 

        $sensor->save();
        session()->flash('success', 'atualizado');
        return redirect()->route('sensor.index');
      }

      public function status($id){
        $sensor = Sensor::find($id);
        $sensor->status = !$sensor->status;
        $sensor->save();
      }

    public function render()
    {
        return view('livewire.sensor.sensor-edit');
    }
}
