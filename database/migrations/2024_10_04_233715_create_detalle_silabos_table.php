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
        Schema::create('detalle_silabos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('silabos');
            $table->string('encuentro');
            $table->date('fecha');

            $table->json('unidades_id')->nullable()->comment('relacion con data');
            $table->json('objetivos_id')->nullable()->comment('relacion con data');
            $table->json('contenidos_id')->nullable()->comment('relacion con data');

            $table->foreignId('forma_organizativa_id')->nullable()->constrained('catalogos');
            $table->foreignId('forma_organizativa_detalle')->nullable();
            $table->foreignId('metodologia')->nullable();
            $table->foreignId('horas_presenciales')->nullable();
            $table->foreignId('horas_trabajo_independiente')->nullable();
            $table->foreignId('evaluacion_id')->nullable()->constrained('catalogos');
            $table->foreignId('evaluacion_detalle')->nullable();
            $table->foreignId('observaciones')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_silabos');
    }
};
