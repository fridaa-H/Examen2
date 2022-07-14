<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(Request $request){
        //Paginado de usuarios
        //$usuarios = Usuario::paginate(2);
        //return $usuarios;

        //$queryMateria = $request->query('materia');
        //$queryEdad = $request->query('edad');
        //$queryId = $request->query('id');
        //$usuarios = Usuario::where('materia',$queryMateria)->get();

        //$usuarios = Usuario::where('materia', 'LIKE', '%' .$queryMateria. '%')->where('edad', 'LIKE', '%' .$queryEdad. '%')
        //->where('id', 'LIKE', '%' .$queryId. '%')->get();

        //$usuarios = Usuario::where('materia', 'LIKE', '%' .$queryMateria. '%')->get();
        //FILTRO DE DATOS
        //$query = $request -> query('genero');
        //return $query;

        //OBTENER TODOS LOS USUARIOS
        $usuarios = Usuario::all();

        //SENTENCIA WHERE
        $total_masculinos = Usuario::where('genero','=','Masculino')->get()->count();
        $total_femeninos = Usuario::where('genero','=','Femenino')->get()->count();
        $total_becados = Usuario::where('becado','=','Si')->get()->count();
        $total_nobecados = Usuario::where('becado','=','No')->get()->count();
        $total_matutino = Usuario::where('horario','=','Matutino')->get()->count();
        $total_vespertino = Usuario::where('horario','=','Vespertino')->get()->count();
        $alumnos_reprobados = Usuario::where('calificacion_prepa','<','6')->get()->count();
        $alumnos_aprobados = Usuario::where('calificacion_prepa','>','6')->get()->count();
        $total_problemas = Usuario::where('problemas_salud','=','Si')->get()->count();
        $total_noproblemas = Usuario::where('problemas_salud','=','No')->get()->count();
        //$empleados_inactivos_femeninos = Usuario::where('estatus','=','Inactivo')->where('genero','=','Femenino')->get()->count();

        //SENTENCIA PARA CONTAR TODOS LOS USUARIOS DE LA BASE DE DATOS
        //$usuarios = Usuario::count();

        //SENTENCIA WHERE
        //$usuarios = Usuario::where('nombre','=','Jose')->orwhere('materia','=','tics')->get();

        return response(['Total_Masculino: '=>$total_masculinos,
                         'Total_Femenino: '=>$total_femeninos,
                        'Alumnos_becados: '=>$total_becados,
                        'Alumnos_No_becados: '=>$total_nobecados,
                        'Alumnos_En_Matutino: '=>$total_matutino,
                        'Alumnos_En_Vespertino: '=>$total_vespertino,
                        'Alumnos_Reprobados_Preparatoria: '=>$alumnos_reprobados,
                        'Alumnos_Aprobados_Preparatoria: '=>$alumnos_aprobados,
                        'Alumnos_Problemas_Salud: '=>$total_problemas,
                        'Alumnos_Sin_Problemas_Salud: '=>$total_noproblemas,
                    ]);
        return $usuarios;
    }

    public function create(Request $request){
        $data = $this->rules($request);

        Usuario::create($data);
        return response([
            'message'=>'Se creo con exito el usuario'
        ],201);
    }

    public function show($id){
        $usuario=Usuario::find($id);
        return response($usuario);
    }

    public function edit($id, Request $request){
        $data = $this->rules($request);

        Usuario::find($id)->fill($data)->save();
        return response([
            'message'=>'Se modifico el usuario con exito'
        ],201);
    }

    public function delete($id){
        Usuario::find($id)->delete();
        return response([
            'message'=>'Se elimino el usuario con exito'
        ],201);
    }

    public function rules($request){
        return $this->validate ($request,[
            'nombre'=>'required|string',
            'materia'=>'required|string',
            'edad'=>'required|numeric'
        ]);
    }

    public function estadisticass($request){
        $usuario=Usuario::count();
        return $usuario;
    }
}
