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
        Schema::create('color_pelaje', function (Blueprint $table) {
            $table->string('id_color_pelaje', 20)->primary();
            $table->string('descripcion', 50)->notNullable(); 
            $table->dateTime('created_at', $precision = 3);
            $table->dateTime('updated_at', $precision = 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color_pelaje');
    }
};
