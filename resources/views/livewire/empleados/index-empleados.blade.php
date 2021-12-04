<div class="container">
    <a type="button" class="btn btn-success mb-3 float-right" href="{{route('empleados.create')}}"><i class="fas fa-user-plus"></i> Crear</a>
    <h1 class="text-center float-center">EMPLEADOS</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Primer Nombre</th>
            <th scope="col">Segundo Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <!--<th scope="col">Sexo</th> -->
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Estado</th>
            <th scope="col">Facebook</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
          <tr>
            <th scope="row">1</th>
            <td>{{$empleado->primernombre}}</td>
            <td>{{$empleado->segundonombre}}</td>
            <td>{{$empleado->apellidopaterno}}</td>
            <td>{{$empleado->apellidomaterno}}</td>
            <!--<td>{{$empleado->sexo}}</td> -->
            <td>{{$empleado->fechanacimiento}}</td>
            <td>{{$empleado->estado}}</td>
            <td>{{$empleado->facebook}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>
                <button type="button" class="btn btn-primary  btn-sm" href="#"><i class="fas fa-eye"></i></button>
                <a type="button" class="btn btn-warning btn-sm " href="{{route('empleados.editar',$empleado)}}"><i class="fas fa-user-edit"></i></a>
                <a type="button" class="btn btn-danger   btn-sm" href="{{route('empleados.eliminar',$empleado)}}"><i class="fas fa-user-times"></i></a>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
      {{$empleados->links()}}

    </div>
