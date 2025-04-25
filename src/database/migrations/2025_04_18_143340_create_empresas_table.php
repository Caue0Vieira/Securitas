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
        Schema::create('empresas', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Relacionamentos
            $table->foreignUuid('grupo_id')->nullable()->constrained('grupos')->nullOnDelete();
            $table->foreignUuid('medico_id')->nullable()->constrained('medicos')->nullOnDelete();

            // Dados cadastrais
            $table->enum('tipo_inscricao', ['pj'])->default('pj'); // por enquanto, apenas Pessoa Jurídica
            $table->string('cnpj', 18)->unique();
            $table->string('razao_social')->nullable();
            $table->string('nome_fantasia');
            $table->string('cnae')->nullable();
            $table->string('atividade')->nullable();
            $table->string('grau_risco')->nullable();

            // Endereço
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('complemento')->nullable();
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('estado')->nullable(); // UF
            $table->string('cidade')->nullable();

            // eSocial
            $table->boolean('aplica_regra_nr7')->default(true);
            $table->string('grupo_esocial')->nullable();

            // Status geral
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
            $table->boolean('ativo')->default(true); // controle de soft visibilidade

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
