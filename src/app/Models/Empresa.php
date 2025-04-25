<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $table = 'empresas';

    public $fillable = [
        'grupo_id',
        'medico_id',
        'tipo_inscricao',
        'cnpj',
        'razao_social',
        'nome_fantasia',
        'cnae',
        'atividade',
        'grau_risco',
        'cep',
        'logradouro',
        'complemento',
        'numero',
        'bairro',
        'estado',
        'cidade',
        'aplica_regra_nr7',
        'grupo_esocial',
        'status',
        'ativo'
    ];

    protected $casts = [
        'id' => 'string',
        'grupo_id' => 'string',
        'medico_id' => 'string',
        'tipo_inscricao' => 'string',
        'cnpj' => 'string',
        'razao_social' => 'string',
        'nome_fantasia' => 'string',
        'cnae' => 'string',
        'atividade' => 'string',
        'grau_risco' => 'string',
        'cep' => 'string',
        'logradouro' => 'string',
        'complemento' => 'string',
        'numero' => 'string',
        'bairro' => 'string',
        'estado' => 'string',
        'cidade' => 'string',
        'aplica_regra_nr7' => 'boolean',
        'grupo_esocial' => 'string',
        'status' => 'string',
        'ativo' => 'boolean'
    ];

    public static array $rules = [
        'grupo_id' => 'nullable|string',
        'medico_id' => 'nullable|string',
        'tipo_inscricao' => 'required|string|max:255',
        'cnpj' => 'required|string|max:18',
        'razao_social' => 'nullable|string|max:255',
        'nome_fantasia' => 'required|string|max:255',
        'cnae' => 'nullable|string|max:255',
        'atividade' => 'nullable|string|max:255',
        'grau_risco' => 'nullable|string|max:255',
        'cep' => 'nullable|string|max:255',
        'logradouro' => 'nullable|string|max:255',
        'complemento' => 'nullable|string|max:255',
        'numero' => 'nullable|string|max:255',
        'bairro' => 'nullable|string|max:255',
        'estado' => 'nullable|string|max:255',
        'cidade' => 'nullable|string|max:255',
        'aplica_regra_nr7' => 'required|boolean',
        'grupo_esocial' => 'nullable|string|max:255',
        'status' => 'required|string|max:255',
        'ativo' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function grupo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Grupo::class, 'grupo_id');
    }

    public function medico(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Medico::class, 'medico_id');
    }

    public function funcos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Funco::class, 'empresa_id');
    }

    public function funcionarios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Funcionario::class, 'empresa_id');
    }

    public function setores(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Setore::class, 'empresa_id');
    }

    public function unidades(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Unidade::class, 'empresa_id');
    }
}
