<?php

namespace App\Repositories;

use App\Models\Unidades;
use App\Repositories\BaseRepository;

class UnidadesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'empresa_id',
        'medico_responsavel_id',
        'tipo_local_trabalho',
        'tipo_inscricao',
        'cnpj',
        'razao_social',
        'nome_referencia',
        'cnae',
        'atividade',
        'grau_risco',
        'codigo_interno',
        'cep',
        'logradouro',
        'complemento',
        'numero',
        'bairro',
        'estado',
        'cidade',
        'email_responsavel',
        'cpf_responsavel_ambiental',
        'status',
        'ativo'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Unidades::class;
    }
}
