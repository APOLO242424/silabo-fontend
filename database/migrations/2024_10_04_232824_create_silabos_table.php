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
        Schema::create('silabos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignatura_id')->nullable()->constrained('asignaturas');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('sede_id')->nullable()->constrained('catalogos');
            $table->foreignId('anio_lectivo_id')->nullable()->constrained('catalogos');
            $table->foreignId('tipo_evaluacion_id')->nullable()->constrained('catalogos');
            $table->foreignId('trimestre_id')->nullable()->constrained('catalogos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('silabos');
    }
};
