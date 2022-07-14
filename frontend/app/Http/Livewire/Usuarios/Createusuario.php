<?php

namespace App\Http\Livewire\Usuarios;

use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Createusuario extends Component
{public $data = [];

    public function render()
    {
        return view('livewire.usuarios.createusuario');
    }
    public function guardardatos()
    {
        
        http::post('http://localhost:8000/api/alumnos', $this->data);

            return redirect('/usuarios');
    }
}
