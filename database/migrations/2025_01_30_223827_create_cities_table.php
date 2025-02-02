<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->comment('Tabela de cidades');
            $table->id()->comment('Identificador do registro');                        
            $table->string('name')->comment('Nome da cidade');
            $table->string('estado', 2)->comment('UF do estado');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
