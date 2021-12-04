<div>
    <form wire:submit.prevent="editar">

    <div class="text-center card">
        <div class="card-header">
            Editar Empleado
        </div>
        <div class="card-body">
            @include('livewire.empleados.formulario')
        </div>
        <div class="card-footer text-muted">
        <button wire:click="editar"  class="btn btn-success btn-sm">Editar</button>
        <a href="{{route('empleados.index')}}"  class="btn btn-secondary btn-sm ">Cancelar</a>
    </div>
    </div>

</form>
</div>
