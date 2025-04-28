<?php

namespace App\Repositories;

use App\Models\Medicos;
use App\Repositories\BaseRepository;

class MedicosRepository extends BaseRepository
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
        return Medicos::class;
    }
}
