<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('primernombre');
            $table->string('segundonombre');
            $table->string('apellidopaterno');
            $table->string('apellidomaterno');
            //$table->string('sexo');
            $table->date('fechanacimiento');
            $table->string('puesto');
            $table->string('curp');
            $table->string('rfc');
            $table->string('estado');
            $table->integer('codigopostal');
            $table->float('salario');
            $table->string('correo');
            $table->string('horario');
            $table->string('areatrabajo');
            $table->string('facebook');
            $table->integer('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
