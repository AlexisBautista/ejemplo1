
<div class="row">
    <div class="col-6 mx-auto ">
        <div class="form-group">
          <label>Primer Nombre:</label>
          <input wire:model = "empleado.primernombre"  class="form-control">
          @error('empleado.primernombre') <span class="text-danger">{{$message}}</span> @enderror

        </div>
        <div class="form-group">
            <label>Segundo Nombre:</label>
            <input wire:model = "empleado.segundonombre" type="text" class="form-control">
            @error('empleado.segundonombre') <span class="text-danger">{{$message}}</span> @enderror

          </div>
          <div class="form-group">
            <label>Apellido Paterno:</label>
            <input wire:model = "empleado.apellidopaterno" type="text" class="form-control">
            @error('empleado.apellidopaterno') <span class="text-danger">{{$message}}</span> @enderror
          </div>
          <div class="form-group">
            <label>Apellido Materno</label>
            <input wire:model = "empleado.apellidomaterno" type="text" class="form-control">
            @error('empleado.apellidomaterno') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        {{-- <div class="form-group">
            <label>Sexo</label>
            <select type="text" wire:model = "empleado.sexo"  class="form-control">
                <option>Masculino</option>
                <option>Femenino</option>
              </select>
            @error('empleado.sexo') <span class="text-danger">{{$message}}</span> @enderror
        </div> --}}
        <div class="form-group">
            <label>Fecha de Nacimiento</label>
            <input wire:model = "empleado.fechanacimiento" type="date" class="form-control">
            @error('empleado.fechanacimiento') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Puesto De Trabajo</label>
            <input wire:model = "empleado.puesto" type="text" class="form-control">
            @error('empleado.puesto') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>CURP</label>
            <input wire:model = "empleado.curp" type="text" class="form-control">
            @error('empleado.curp') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>RFC</label>
            <input wire:model = "empleado.rfc" type="text" class="form-control">
            @error('empleado.rfc') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Estado</label>
            <input wire:model = "empleado.estado" type="text" class="form-control">
            @error('empleado.estado') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Codigo Postal</label>
            <input wire:model = "empleado.codigopostal" type="number" class="form-control">
            @error('empleado.codigopostal') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Salario</label>
            <input wire:model = "empleado.salario" type="number" class="form-control">
            @error('empleado.salario') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Correo Electronico</label>
            <input wire:model = "empleado.correo" type="text" class="form-control">
            @error('empleado.correo') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Horario de Trabajo</label>
            <input wire:model = "empleado.horario" type="text" class="form-control">
            @error('empleado.horario') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Area de Trabajo</label>
            <input wire:model = "empleado.areatrabajo" type="text" class="form-control">
            @error('empleado.areatrabajo') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Facebook</label>
            <input wire:model = "empleado.facebook" type="text" class="form-control">
            @error('empleado.facebook') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Telefono</label>
            <input wire:model = "empleado.telefono" type="number" class="form-control">
            @error('empleado.telefono') <span class="text-danger">{{$message}}</span> @enderror
        </div>


    </div>
</div>
