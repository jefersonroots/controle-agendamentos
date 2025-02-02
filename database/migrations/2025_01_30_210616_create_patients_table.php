<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->comment('Tabela de pacientes');
            $table->id()->comment('Identificador do registro');                        
            $table->string('nome')->comment('Nome do paciente');
            $table->string('cpf', 20)->comment('CPF do paciente');
            $table->string('celular', 20)->comment('Telefone do paciente');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
