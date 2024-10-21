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
        Schema::create('criadores', function (Blueprint $table) {
            $table->string('id_criador', 20)->primary();
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->string('nombres', 150);
            $table->string('telefono', 20)->nullable();
            $table->string('dni', 8);
            $table->string('nombre_ganaderia', 255)->nullable();
            $table->boolean('estado');
            $table->unsignedBigInteger('id_region');
            $table->unsignedBigInteger('id_province'); 
            $table->unsignedBigInteger('id_distrito'); 
            $table->string('id_centro_poblado', 20);
            $table->string('id_caserio_anexo', 20)->nullable(); 
            $table->foreign('id_region')->references('id_region')->on('regiones')->onDelete('cascade');
            $table->foreign('id_province')->references('id_province')->on('provinces')->onDelete('cascade');
            $table->foreign('id_distrito')->references('id_distrito')->on('distritos')->onDelete('cascade');
            $table->foreign('id_centro_poblado')->references('id_centro_poblado')->on('centros_poblados')->onDelete('cascade');
            $table->foreign('id_caserio_anexo')->references('id_caserio_anexo')->on('caserios_anexos')->onDelete('set null');
            $table->dateTime('created_at',$precision=3);
            $table->dateTime('updated_at',$precision=3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criadores');
    }
};
