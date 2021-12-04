<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class CreateEmpleados extends Component
{
    public Empleado $empleado;
    public function mount()
    {
        $this->empleado = new Empleado();
    }
    public function render()
    {
        return view('livewire.empleados.create-empleados');
    }
    public function crear()
    {
        $this->validate();
        $this->empleado->save();
        return redirect(route('empleados.index'));
    }
    protected function rules()
    {
        return [
            'empleado.primernombre' => 'required',
            'empleado.segundonombre' => 'nullable',
            'empleado.apellidopaterno' => 'required',
            'empleado.apellidomaterno' => 'nullable',
            //'empleado.sexo' => 'required',
            'empleado.fechanacimiento' => 'required',
            'empleado.puesto' => 'required',
            'empleado.curp' => 'required',
            'empleado.rfc' => 'required',
            'empleado.estado' => 'required',
            'empleado.codigopostal' => 'numeric|required',
            'empleado.salario' => 'numeric|required',
            'empleado.correo' => 'required',
            'empleado.horario' => 'required',
            'empleado.areatrabajo' => 'required',
            'empleado.facebook' => 'nullable',
            'empleado.telefono' => 'numeric|required'

        ];
    }
}
