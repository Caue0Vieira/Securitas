<?php

namespace App\Repositories;

use App\Models\Grupo;
use App\Repositories\BaseRepository;

class GrupoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nome',
        'logo',
        'status',
        'ativo'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Grupo::class;
    }
}
