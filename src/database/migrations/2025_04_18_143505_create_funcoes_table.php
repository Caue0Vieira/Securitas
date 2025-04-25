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
        Schema::create('funcoes', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Relacionamento com empresa
            $table->foreignUuid('empresa_id')->constrained('empresas')->onDelete('cascade');

            // Dados da função/cargo
            $table->string('nome'); // Nome/Referência da função
            $table->string('codigo_interno')->nullable(); // Código interno opcional
            $table->string('cbo')->nullable(); // Código Brasileiro de Ocupações
            $table->text('descricao_atividades'); // Descrição das atividades obrigatória

            // Status
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
            $table->boolean('ativo')->default(true); // controle lógico

            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcoes');
    }
};
