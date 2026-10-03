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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 255);
            $table->string('resumen', 255);
            $table->string('descripcion', 2000);
            $table->date('fecha_entrega');
            $table->date('fecha_publicacion');
            $table->tinyinteger('semestre');
            $table->enum('tipo', ['PI', 'PG', 'PE', 'Otro']);
            $table->enum('version', ['Idea', 'Prototipo', 'En progreso', 'Finalizado']);
            $table->tinyInteger('calificacion')->nullable();
            $table->string('keywords', 255)->nullable();
            $table->enum('estado', ['En revisión', 'Aprobado', 'Rechazado', 'Corrección'])->default('En revisión');
            $table->string('observación', 2000)->nullable();
            $table->string('email_publicador', 255);

            $table->foreignId('programa_id')->constrained('programas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
