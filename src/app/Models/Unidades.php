<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    public $table = 'unidades';

    public $fillable = [
        'empresa_id',
        'medico_responsavel_id',
        'tipo_local_trabalho',
        'tipo_inscricao',
        'cnpj',
        'razao_social',
        'nome_referencia',
        'cnae',
        'atividade',
        'grau_risco',
        'codigo_interno',
        'cep',
        'logradouro',
        'complemento',
        'numero',
        'bairro',
        'estado',
        'cidade',
        'email_responsavel',
        'cpf_responsavel_ambiental',
        'status',
        'ativo'
    ];

    protected $casts = [
        'id' => 'string',
        'empresa_id' => 'string',
        'medico_responsavel_id' => 'string',
        'tipo_local_trabalho' => 'string',
        'tipo_inscricao' => 'string',
        'cnpj' => 'string',
        'razao_social' => 'string',
        'nome_referencia' => 'string',
        'cnae' => 'string',
        'atividade' => 'string',
        'grau_risco' => 'string',
        'codigo_interno' => 'string',
        'cep' => 'string',
        'logradouro' => 'string',
        'complemento' => 'string',
        'numero' => 'string',
        'bairro' => 'string',
        'estado' => 'string',
        'cidade' => 'string',
        'email_responsavel' => 'string',
        'cpf_responsavel_ambiental' => 'string',
        'status' => 'string',
        'ativo' => 'boolean'
    ];

    public static array $rules = [
        'empresa_id' => 'required|string',
        'medico_responsavel_id' => 'nullable|string',
        'tipo_local_trabalho' => 'nullable|string|max:255',
        'tipo_inscricao' => 'required|string|max:255',
        'cnpj' => 'required|string|max:18',
        'razao_social' => 'nullable|string|max:255',
        'nome_referencia' => 'required|string|max:255',
        'cnae' => 'nullable|string|max:255',
        'atividade' => 'nullable|string|max:255',
        'grau_risco' => 'nullable|string|max:255',
        'codigo_interno' => 'nullable|string|max:255',
        'cep' => 'required|string|max:255',
        'logradouro' => 'required|string|max:255',
        'complemento' => 'nullable|string|max:255',
        'numero' => 'required|string|max:255',
        'bairro' => 'required|string|max:255',
        'estado' => 'required|string|max:255',
        'cidade' => 'required|string|max:255',
        'email_responsavel' => 'nullable|string|max:255',
        'cpf_responsavel_ambiental' => 'nullable|string|max:14',
        'status' => 'required|string|max:255',
        'ativo' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function empresa(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'empresa_id');
    }

    public function medicoResponsavel(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Medico::class, 'medico_responsavel_id');
    }
}
