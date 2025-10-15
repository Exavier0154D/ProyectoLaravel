<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('proyectos', function (Blueprint $table) {
            // Añadir las columnas faltantes
            $table->string('nombre', 100)->nullable(); // Permitir valores nulos temporalmente
            $table->text('descripcion')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('proyectos', function (Blueprint $table) {
            // Eliminar las columnas si se revierte
            $table->dropColumn('descripcion');
            $table->dropColumn('nombre');
        });
    }
};