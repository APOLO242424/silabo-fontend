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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carreara_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('aula_id')->nullable();
            $table->foreignId('sade_id')->nullable();
            $table->foreignId('anio_lecticvo_id')->nullable()->constrained('catalogos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
