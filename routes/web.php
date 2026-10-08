<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteIndex;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Sensor\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/index', AmbienteIndex::class)->name('ambiente.index');
Route::get('/ambiente/edit', AmbienteEdit::class)->name('ambiente.edit');

Route::get('/sensor/index', SensorIndex::class)->name('sensor.index');