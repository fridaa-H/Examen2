<div>
    <a href="usuarios/create" type="button" class="btn btn-success">Nuevo</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>nombre</th>
            <th>edad</th>
            <th>genero</th>
            <th>carrera</th>
            <th>ednia_indigena</th>
            <th>horario</th>
            <th>calificacion_prepa</th>
            <th>becado</th>
            <th>problemas_salud</th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuarios as $usuario)
          <tr>
            <td>{{$usuario['_id']}}</td>
            <td>{{$usuario['nombre']}}</td>
            <td>{{$usuario['edad']}}</td>
            <td>{{$usuario['genero']}}</td>
            <td>{{$usuario['materia']}}</td>
            <td>{{$usuario['ednia_indigena']}}</td>
            <td>{{$usuario['horario']}}</td>
            <td>{{$usuario['calificacion_prepa']}}</td>
            <td>{{$usuario['becado']}}</td>
            <td>{{$usuario['problemas_salud']}}</td>
          </tr>
          @endforeach
        </tbody>
        </table>
</div>
