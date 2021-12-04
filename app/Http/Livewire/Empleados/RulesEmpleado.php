<?php

namespace App\Http\Livewire\Empleados;

class RulesEmpleado
{

    public static function Rules()
    {
        return
            [
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
