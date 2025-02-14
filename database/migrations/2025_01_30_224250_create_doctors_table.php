<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->comment('Tabela de médicos');
            $table->id()->comment('Identificador do registro');
            $table->string('nome')->comment('Nome do médico');
            $table->string('especialidade')->comment('Name da especialidade');
            $table->foreignId('cidade_id')->comment('Identificador da cidade')->constrained('cities')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
