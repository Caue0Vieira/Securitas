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
        Schema::create('setores', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Relacionamento
            $table->foreignUuid('empresa_id')->constrained('empresas')->onDelete('cascade');

            // Dados do setor
            $table->string('nome');
            $table->string('codigo_interno')->nullable();
            $table->string('descricao', 100)->nullable(); // Máx 100 caracteres
            $table->boolean('enviar_descricao_esocial')->default(false);
            $table->boolean('incluir_dados_edificacao')->default(false);

            // Status
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
        Schema::dropIfExists('setores');
    }
};
