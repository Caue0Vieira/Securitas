<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setores extends Model
{
    public $table = 'setores';

    public $fillable = [
        'empresa_id',
        'nome',
        'codigo_interno',
        'descricao',
        'enviar_descricao_esocial',
        'incluir_dados_edificacao',
        'status',
        'ativo'
    ];

    protected $casts = [
        'id' => 'string',
        'empresa_id' => 'string',
        'nome' => 'string',
        'codigo_interno' => 'string',
        'descricao' => 'string',
        'enviar_descricao_esocial' => 'boolean',
        'incluir_dados_edificacao' => 'boolean',
        'status' => 'string',
        'ativo' => 'boolean'
    ];

    public static array $rules = [
        'empresa_id' => 'required|string',
        'nome' => 'required|string|max:255',
        'codigo_interno' => 'nullable|string|max:255',
        'descricao' => 'nullable|string|max:100',
        'enviar_descricao_esocial' => 'required|boolean',
        'incluir_dados_edificacao' => 'required|boolean',
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
        return $this->hasMany(\App\Models\Funcionario::class, 'setor_id');
    }
}
