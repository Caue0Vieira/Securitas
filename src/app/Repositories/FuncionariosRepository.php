<?php

namespace App\Repositories;

use App\Models\Funcionarios;
use App\Repositories\BaseRepository;

class FuncionariosRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Funcionarios::class;
    }
}
