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
        Schema::create('eventos', function (Blueprint $table) {
            $table->string('id_evento', 20)->primary();
            $table->string('id_usuario', 20);
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->string('id_llama', 20);
            $table->foreign('id_llama')->references('id_llama')->on('llamas');
            $table->string('id_criador', 20);
            $table->foreign('id_criador')->references('id_criador')->on('criador');
            $table->string('tipo_evento', 50);
            $table->text('descripcion')->nullable();
            $table->timestamp('fecha_evento')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('created_at', $precision = 3);
            $table->dateTime('updated_at', $precision = 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
