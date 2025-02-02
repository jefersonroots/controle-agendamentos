<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->comment('Tabela de consultas');
            $table->id()->comment('Identificador do registro');                        
            $table->foreignId('doctor_id')->comment('Identificador do médico')->constrained()->onDelete('restrict');
            $table->foreignId('patient_id')->comment('Identificador do paciente')->constrained()->onDelete('restrict');
            $table->timestamp('data')->comment('Data da consulta');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
