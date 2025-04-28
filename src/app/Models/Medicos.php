<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicos extends Model
{
    public $table = 'medicos';

    public $fillable = [
        'nome',
        'cpf',
        'crm',
        'uf_crm',
        'rqe',
        'ativo'
    ];

    protected $casts = [
        'id' => 'string',
        'nome' => 'string',
        'cpf' => 'string',
        'crm' => 'string',
        'uf_crm' => 'string',
        'rqe' => 'string',
        'ativo' => 'boolean'
    ];

    public static array $rules = [
        'nome' => 'required|string|max:255',
        'cpf' => 'nullable|string|max:14',
        'crm' => 'required|string|max:8',
        'uf_crm' => 'required|string|max:2',
        'rqe' => 'nullable|string|max:7',
        'ativo' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function unidades(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Unidade::class, 'medico_responsavel_id');
    }

    public function empresas(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Empresa::class, 'medico_responsavel_id');
    }
}
