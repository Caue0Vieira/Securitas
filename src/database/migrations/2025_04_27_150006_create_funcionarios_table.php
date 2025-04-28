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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Relacionamentos
            $table->foreignUuid('grupo_id')->nullable()->constrained('grupos')->nullOnDelete(); // grupo/cliente
            $table->foreignUuid('empresa_id')->constrained('empresas')->nullOnDelete(); // obrigatória
            $table->foreignUuid('setor_id')->constrained('setores')->nullOnDelete();    // obrigatória
            $table->foreignUuid('funcao_id')->constrained('funcoes')->nullOnDelete();   // obrigatória

            // Dados do funcionário
            $table->enum('tipo', ['funcionario', 'candidato'])->default('funcionario');
            $table->string('nome');
            $table->string('cpf', 14)->unique();
            $table->date('data_nascimento');
            $table->date('data_admissao'); // ou previsão
            $table->boolean('sem_vinculo')->default(false);
            $table->string('matricula')->nullable();
            $table->date('data_ultima_avaliacao')->nullable();
            $table->string('genero')->nullable(); // pode ser padronizado depois
            $table->string('email')->nullable();
            $table->enum('status', ['ativo', 'inativo', 'afastado'])->default('ativo');
            $table->text('observacao')->nullable();

            $table->boolean('ativo')->default(true); // visibilidade
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
