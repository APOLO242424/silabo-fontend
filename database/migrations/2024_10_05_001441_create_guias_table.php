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
        Schema::create('guias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('silabo_id')->nullable()->constrained('silabos');
            $table->foreignId('detalle_silabo_id')->nullable()->constrained('detalle_silabos');
            $table->foreignId('carrera_id')->nullable()->constrained('carreras');
            $table->foreignId('sede_id')->nullable()->constrained('sedes');
            $table->foreignId('asignatura_id')->nullable()->constrained('asignaturas');
            $table->text('objetivo_conceptual')->nullable();
            $table->text('objetivo_procedimental')->nullable();
            $table->text('objetivo_actitudinal')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guias');
    }
};
