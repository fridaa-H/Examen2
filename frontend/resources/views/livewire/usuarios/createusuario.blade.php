<div>
    <div class="form-group">
        <label for="usr">Nombre:</label>
        <input wire:model="data.nombre" type="text" class="form-control" id="usr">
      </div>
      <div class="form-group">
        <label for="">Edad:</label>
        <input wire:model="data.edad" type="number" class="form-control" id="pwd">
      </div>
      <div class="form-group">
        <label for="pwd">Genero:</label>
        <select wire:model="data.genero" class="form-control">
            <option value=""></option>
            <option>Masculino</option>
            <option>Femenino</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pwd">Carrera:</label>
        <input wire:model="data.materia" type="text" class="form-control" id="pwd">
      </div>
      <label>Etnia Indigena:</label>
      <select wire:model="data.ednia_indigena" class="form-control">
            <option value=""></option>
            <option>Si</option>
            <option>No</option>
        </select>
        <label>Horario:</label>
      <select wire:model="data.horario" class="form-control">
            <option value=""></option>
            <option>Matutino</option>
            <option>Vespertino</option>
        </select>
        <label>Calificacion de Preparatoria:</label>
      <select wire:model="data.calificacion_prepa" class="form-control">
            <option value=""></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
        </select>
        <label>Becado:</label>
      <select wire:model="data.becado" class="form-control">
            <option value=""></option>
            <option>Si</option>
            <option>No</option>
        </select>
        <label>Problemas de Salud:</label>
      <select wire:model="data.problemas_salud" class="form-control">
            <option value=""></option>
            <option>Si</option>
            <option>No</option>
        </select>
      <button wire:click="guardardatos" type="button" class="btn btn-primary">Guardar</button>
</div>