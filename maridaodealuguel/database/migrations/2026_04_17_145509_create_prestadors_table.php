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
        Schema::create('prestadors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('telefone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('status')->default('ativo');
            $table->date('data_nascimento')->nullable();
            $table->string('cpf')->unique()->nullable();
            $table->string('cnpj')->unique()->nullable();
            $table->string('areadeatuacao')->nullable();
            $table->string('disponibilidade')->nullable();
            $table->foreignId('endereco')->nullable()->constrained('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestadors');
    }
};
