<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Override;

class Sensor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ambiente_id',
        'codigo', // tempo1, tempo1, led01, led02
        'tipo', // led ou temperatura
        'descricao',
        'status'// ativoou inativo
    ];

   
    public function registos()
    {
        return $this->hasMany(Registro::class);
    }

    public function ambientes(){
        return $this->belongsto(Ambiente::class);
    }
}
