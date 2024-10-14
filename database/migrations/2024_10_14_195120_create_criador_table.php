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
        Schema::create('criador', function (Blueprint $table) {
            $table->string('id_criador', 20)->primary();
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->string('nombres', 150);
            $table->string('telefono', 20)->nullable(); // Permitimos que el teléfono sea nulo si no está disponible
            $table->string('dni', 8)->unique()->nullable(); // Aseguramos que el DNI sea único
            $table->string('nombre_ganaderia', 255);
            $table->string('id_region', 20);
            $table->dateTime('created_at', $precision = 3);
            $table->dateTime('updated_at', $precision = 3);
            $table->foreign('id_region')->references('id_region')->on('region');
            $table->string('id_provincia', 20);
            $table->foreign('id_provincia')->references('id_provincia')->on('province');
            $table->string('id_distrito', 20);
            $table->foreign('id_distrito')->references('id_distrito')->on('distrito');
            $table->string('id_centro_poblado', 20);
            $table->foreign('id_centro_poblado')->references('id_centro_poblado')->on('centro_poblado');
            $table->string('id_caserio_anexo', 20);
            $table->foreign('id_caserio_anexo')->references('id_caserio_anexo')->on('caserio_anexo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criador');
    }
};
