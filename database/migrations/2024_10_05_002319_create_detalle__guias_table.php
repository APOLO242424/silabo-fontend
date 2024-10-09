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
        Schema::create('detalle__guias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guia_id')->nullable()->constrained('guias');
            $table->foreignId('detalle_silabo_id')->nullable()->constrained('detalle_silabos');
            $table->text('actividades')->nullable();
            $table->text('evaluacion')->nullable();
            $table->text('recursos')->nullable();
            $table->text('fecha')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle__guias');
    }
};
