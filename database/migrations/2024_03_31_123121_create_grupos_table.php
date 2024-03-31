<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id(); // Aquí estoy asumiendo que 'Clave' es un ID autoincremental
            $table->string('nombre', 50);
            $table->foreignId('FK_id_rango')->constrained('rango_alumnos');
            $table->foreignId('FK_id_horario')->constrained('horarios');
            $table->foreignId('FK_clave_materia')->constrained('materias');
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
        Schema::dropIfExists('grupos');
    }
};
