<div>
    <div class="text-center card mx-auto" style="width: 18rem;">
        <img src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$empleado->primernombre}} {{$empleado->segundonombre}} {{$empleado->apellidomaterno}} {{$empleado->apellidopaterno}}</h5>
          <p class="card-text">{{$empleado->puesto}}</p>
          <button wire:click="eliminar" class="btn btn-danger">Eliminar</button>
          <a href="{{route('empleados.index')}}" class="btn btn-secondary">Cancelar</a>
        </div>
      </div>
</div>
