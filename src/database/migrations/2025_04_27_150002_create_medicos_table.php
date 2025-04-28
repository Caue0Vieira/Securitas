<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('medicos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome');
            $table->string('cpf', 14)->nullable();
            $table->string('crm', 8); // Apenas números, 8 caracteres máx
            $table->string('uf_crm', 2); // Sigla do estado (ex: SP, RJ)
            $table->string('rqe', 7)->nullable(); // RQE pode ser nulo
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
        Schema::dropIfExists('medicos');
    }
};
