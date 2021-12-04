<div>
    <form wire:submit.prevent="crear">

    <div class="text-center card">
        <div class="card-header">
            Crear Empleado
        </div>
        <div class="card-body">
            @include('livewire.empleados.formulario')
        </div>
        <div class="card-footer text-muted">
        <button wire:click="crear"  class="btn btn-primary btn-sm">Crear</button>
        <a href="{{route('empleados.index')}}"  class="btn btn-secondary btn-sm ">Cancelar</a>
    </div>
    </div>

</form>
</div>
