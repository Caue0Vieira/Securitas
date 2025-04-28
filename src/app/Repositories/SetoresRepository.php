<?php

namespace App\Repositories;

use App\Models\Setores;
use App\Repositories\BaseRepository;

class SetoresRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'empresa_id',
        'nome',
        'codigo_interno',
        'descricao',
        'enviar_descricao_esocial',
        'incluir_dados_edificacao',
        'status',
        'ativo'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Setores::class;
    }
}
