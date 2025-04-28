<?php

namespace App\Repositories;

use App\Models\Grupos;
use App\Repositories\BaseRepository;

class GruposRepository extends BaseRepository
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
        return Grupos::class;
    }
}
