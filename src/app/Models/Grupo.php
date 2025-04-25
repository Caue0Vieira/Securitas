<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public $table = 'grupos';

    public $fillable = [
        'nome',
        'logo',
        'status',
        'ativo'
    ];

    protected $casts = [
        'id' => 'string',
        'nome' => 'string',
        'logo' => 'string',
        'status' => 'string',
        'ativo' => 'boolean'
    ];

    public static array $rules = [
        'nome' => 'required|string|max:255',
        'logo' => 'nullable|string|max:255',
        'status' => 'required|string|max:255',
        'ativo' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function empresas(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Empresa::class, 'grupo_id');
    }

    public function funcionarios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Funcionario::class, 'grupo_id');
    }
}
