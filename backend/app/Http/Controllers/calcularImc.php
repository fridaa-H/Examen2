<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcularImc extends Controller
{
    public function calcular($nombre, $peso, $estatura){
       
        $estaturacuadrado = $estatura * $estatura;
        $imc = $peso/$estaturacuadrado;


            if ($imc < 185){
                return $nombre." Eres una persona muy delgada";
            } elseif ($imc > 185 && $imc < 249){
                return $nombre." Tienes un peso saludable";
            } elseif ($imc >= 250 && $imc <= 299){
                return $nombre." Estas en el rango de sobrepeso";
            } else {
                return $nombre." Cuidate mucho, estas en el rango de obesidad";
            };
        
        }
    
}
