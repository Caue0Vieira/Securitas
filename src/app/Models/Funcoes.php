<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcoes extends Model
{
    public $table = 'funcoes';

    public $fillable = [
        'empresa_id',
        'nome',
        'codigo_interno',
        'cbo',
        'descricao_atividades',
        'status',
        'ativo'
    ];

    protected $casts = [
        'id' => 'string',
        'empresa_id' => 'string',
        'nome' => 'string',
        'codigo_interno' => 'string',
        'cbo' => 'string',
        'descricao_atividades' => 'string',
        'status' => 'string',
        'ativo' => 'boolean'
    ];

    public static array $rules = [
        'empresa_id' => 'required|string',
        'nome' => 'required|string|max:255',
        'codigo_interno' => 'nullable|string|max:255',
        'cbo' => 'nullable|string|max:255',
        'descricao_atividades' => 'required|string',
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

    public function funcionarios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Funcionario::class, 'funcao_id');
    }
}
