<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrera_id')->nullable()->constrained('carreras');
            $table->string('nombre');
            $table->string('codigo');
            $table->foreignId('area_formacion_id')->nullable()->constrained('catalogos');
            $table->foreignId('area_diciplinaria_id')->nullable()->constrained('catalogos');
            $table->foreignId('modaliadad_id')->nullable()->constrained('catalogos');
            $table->foreignId('reguimen_id')->nullable()->constrained('catalogos');
            $table->foreignId('anio_academico_id')->nullable()->constrained('catalogos');
            $table->foreignId('plan_estudio_id')->nullable()->constrained('catalogos');
            $table->json('prerrequisitos')->nullable();
            $table->float('creditos')->nullable();
            $table->integer('horas_precenciales')->nullable();
            $table->integer('horas_trabajo_independiente')->nullable();
            $table->integer('frecuencia')->nullable();
            $table->date('fehca_aprobacion');
            $table->string('autorizado_por')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaturas');
    }
};
