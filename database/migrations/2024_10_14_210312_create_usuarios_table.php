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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('id_usuario', 20)->primary();
            $table->string('nombres', 100);
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->string('password', 255);
            $table->string('email', 150)->unique();
            $table->string('telefono', 20)->nullable();
            $table->text('direccion')->nullable();
            $table->timestamp('fecha_registro')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('estado')->default(true);
            $table->string('rol_id', 20);
            $table->dateTime('created_at', $precision = 3);
            $table->dateTime('updated_at', $precision = 3);
            $table->foreign('rol_id')->references('id_rol')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
