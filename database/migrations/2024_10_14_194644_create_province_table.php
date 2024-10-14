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
        Schema::create('province', function (Blueprint $table) {
            $table->string('id_provincia', 20)->primary();
            $table->string('nombre', 100);
            $table->string('id_region', 20);
            $table->dateTime('created_at', $precision = 3);
            $table->dateTime('updated_at', $precision = 3);
            $table->foreign('id_region')->references('id_region')->on('region');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('province');
    }
};
