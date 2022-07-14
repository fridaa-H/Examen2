<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;


class AlumnoController extends Controller
{
    public function index()
    { 
        $totalm = Alumno::where('genero','=','Masculino')->get();
        $totalf = Alumno::where('genero','=','Femenino')->get();
        $totalb = Alumno::where('becado','=','Si')->get();
        $totalnob = Alumno::where('becado','=','No')->get();
        $matutino = Alumno::where('horario','=','Matutino')->get();
        $vespertino = Alumno::where('horario','=','Vespertino')->get();
        $reprobados = Alumno::where('calificacion_prepa','<','6')->get();
        $aprobados = Alumno::where('calificacion_prepa','>','6')->get();
        $problemas = Alumno::where('problemas_salud','=','Si')->get();
        $noproblemas = Alumno::where('problemas_salud','=','No')->get();
        return response([
            'total_masculinos' => count($totalm),   
            'total_femeninos' => count($totalf),
            'total_becados' => count($totalb),
            'total_nobecados' => count($totalnob),
            'total_matutino' => count($matutino),
            'total_vespertino' => count($vespertino),
            'total_reprobados' => count($reprobados),
            'total_aprobados' => count($aprobados),
            'total_problemas' => count($problemas),
            'total_noproblemas' => count($noproblemas),

        ],200);

        
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            'nombre' => 'required|string',
            'edad' => 'required|string',
            'genero' => 'required',
            'materia' => 'nullable',
            'ednia_indigena' => 'required',
            'horario' => 'required',
            'calificacion_prepa' => 'required|string',
            'becado' => 'required',
            'problemas_salud' => 'required',
        ]);
        Alumno::create($data);
        return response([
            'message' => 'Se creo con exito el alumno',
        ], 201);
    }

    public function show($id)
    {
        $alumno = Alumno::where('_id', $id)->first();
        return response($alumno, 200);
    }

    public function update($id, Request $request)
    {
        $data = $this->rules($request);
        Alumno::find($id)->fill($data)->save();
        return response([
            'message' => 'Se modifico con exito el alumno',
        ], 200);

    }

    public function delete($id)
    {
        Alumno::find($id)->delete();
        return response([
            'message' => 'Se elimino con exito el alumno',
        ], 200);
    }

    protected function rules($request)
    {
        return $request->validate([
            'nombre' => 'required|string',
            'edad' => 'required|string',
            'genero' => 'required',
            'carrera' => 'nullable',
        ]);
    }

    public function estadistica()
    { 
        $alumnos = Alumno::all();
        return response([
            'total_data' => count($alumnos),
            'data' => $alumnos,
        ],200);
    }
}
