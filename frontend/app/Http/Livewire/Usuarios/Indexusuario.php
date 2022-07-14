<?php

namespace App\Http\Livewire\Usuarios;

use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Indexusuario extends Component
{
    public function render()
    {
        $usuarios = Http::get('http://localhost:8000/api/alumnos')->json()['data'];
        return view('livewire.usuarios.indexusuario', compact('usuarios'));
    }


}
