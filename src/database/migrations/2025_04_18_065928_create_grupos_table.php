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
        Schema::create('grupos', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Dados principais
            $table->string('nome'); // Nome ou referência do grupo

            // Logo da empresa (armazenado como caminho do arquivo ou URL)
            $table->string('logo')->nullable(); // opcional

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
        Schema::dropIfExists('grupos');
    }
};
