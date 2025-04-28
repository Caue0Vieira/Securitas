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
        Schema::create('unidades', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Relacionamentos
            $table->foreignUuid('empresa_id')->constrained('empresas')->onDelete('cascade');
            $table->foreignUuid('medico_responsavel_id')->nullable()->constrained('medicos')->nullOnDelete();

            // Dados institucionais
            $table->string('tipo_local_trabalho')->nullable();
            $table->enum('tipo_inscricao', ['cnpj'])->default('cnpj');
            $table->string('cnpj', 18)->unique();
            $table->string('razao_social')->nullable();
            $table->string('nome_referencia');
            $table->string('cnae')->nullable();
            $table->string('atividade')->nullable();
            $table->string('grau_risco')->nullable();
            $table->string('codigo_interno')->nullable();

            // Endereço
            $table->string('cep');
            $table->string('logradouro');
            $table->string('complemento')->nullable();
            $table->string('numero');
            $table->string('bairro');
            $table->string('estado');
            $table->string('cidade');

            // Contato e responsáveis
            $table->string('email_responsavel')->nullable();
            $table->string('cpf_responsavel_ambiental', 14)->nullable();

            // Status e controle
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
            $table->boolean('ativo')->default(true);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades');
    }
};
