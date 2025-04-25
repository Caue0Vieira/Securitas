<?php

namespace App\Repositories;

use App\Models\MedicoResponsavel;
use App\Repositories\BaseRepository;

class MedicoResponsavelRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nome',
        'cpf',
        'crm',
        'uf_crm',
        'rqe',
        'ativo'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return MedicoResponsavel::class;
    }
}
