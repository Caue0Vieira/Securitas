<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    public $table = 'funcionarios';

    public $fillable = [
        'grupo_id',
        'empresa_id',
        'setor_id',
        'funcao_id',
        'tipo',
        'nome',
        'cpf',
        'data_nascimento',
        'data_admissao',
        'sem_vinculo',
        'matricula',
        'data_ultima_avaliacao',
        'genero',
        'email',
        'status',
        'observacao',
        'ativo'
    ];

    protected $casts = [
        'id' => 'string',
        'grupo_id' => 'string',
        'empresa_id' => 'string',
        'setor_id' => 'string',
        'funcao_id' => 'string',
        'tipo' => 'string',
        'nome' => 'string',
        'cpf' => 'string',
        'data_nascimento' => 'date',
        'data_admissao' => 'date',
        'sem_vinculo' => 'boolean',
        'matricula' => 'string',
        'data_ultima_avaliacao' => 'date',
        'genero' => 'string',
        'email' => 'string',
        'status' => 'string',
        'observacao' => 'string',
        'ativo' => 'boolean'
    ];

    public static array $rules = [
        'grupo_id' => 'nullable|string',
        'empresa_id' => 'required|string',
        'setor_id' => 'required|string',
        'funcao_id' => 'required|string',
        'tipo' => 'required|string|max:255',
        'nome' => 'required|string|max:255',
        'cpf' => 'required|string|max:14',
        'data_nascimento' => 'required',
        'data_admissao' => 'required',
        'sem_vinculo' => 'required|boolean',
        'matricula' => 'nullable|string|max:255',
        'data_ultima_avaliacao' => 'nullable',
        'genero' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'status' => 'required|string|max:255',
        'observacao' => 'nullable|string',
        'ativo' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function grupo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Grupo::class, 'grupo_id');
    }

    public function empresa(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'empresa_id');
    }

    public function setor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Setore::class, 'setor_id');
    }

    public function funcao(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Funco::class, 'funcao_id');
    }
}
