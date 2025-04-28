<?php

namespace App\Repositories;

use App\Models\Funcoes;
use App\Repositories\BaseRepository;

class FuncoesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'empresa_id',
        'nome',
        'codigo_interno',
        'cbo',
        'descricao_atividades',
        'status',
        'ativo'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Funcoes::class;
    }
}
