<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Personaje</th>
            <th>Tipo de figura</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
          @foreach($amiibos as $amiibo)
          <tr>
            <td>{{$amiibo['name']}}</td>
            <td>{{$amiibo['character']}}</td>
            <td>{{$amiibo['type']}}</td>
            <td>
                <img style = "width: 100px" src="{{$amiibo['image']}}" alt="">

            </td>
          </tr>
          @endforeach
        </tbody>
        </table>
</div>
