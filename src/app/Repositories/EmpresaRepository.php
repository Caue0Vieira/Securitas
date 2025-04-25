<?php

namespace App\Repositories;

use App\Models\Empresa;
use App\Repositories\BaseRepository;

class EmpresaRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'grupo_id',
        'medico_id',
        'tipo_inscricao',
        'cnpj',
        'razao_social',
        'nome_fantasia',
        'cnae',
        'atividade',
        'grau_risco',
        'cep',
        'logradouro',
        'complemento',
        'numero',
        'bairro',
        'estado',
        'cidade',
        'aplica_regra_nr7',
        'grupo_esocial',
        'status',
        'ativo'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Empresa::class;
    }
}
