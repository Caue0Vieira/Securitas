<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="empresas-table">
            <thead>
            <tr>
                <th>Grupo Id</th>
                <th>Medico Id</th>
                <th>Tipo Inscricao</th>
                <th>Cnpj</th>
                <th>Razao Social</th>
                <th>Nome Fantasia</th>
                <th>Cnae</th>
                <th>Atividade</th>
                <th>Grau Risco</th>
                <th>Cep</th>
                <th>Logradouro</th>
                <th>Complemento</th>
                <th>Numero</th>
                <th>Bairro</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Aplica Regra Nr7</th>
                <th>Grupo Esocial</th>
                <th>Status</th>
                <th>Ativo</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->grupo_id }}</td>
                    <td>{{ $empresa->medico_id }}</td>
                    <td>{{ $empresa->tipo_inscricao }}</td>
                    <td>{{ $empresa->cnpj }}</td>
                    <td>{{ $empresa->razao_social }}</td>
                    <td>{{ $empresa->nome_fantasia }}</td>
                    <td>{{ $empresa->cnae }}</td>
                    <td>{{ $empresa->atividade }}</td>
                    <td>{{ $empresa->grau_risco }}</td>
                    <td>{{ $empresa->cep }}</td>
                    <td>{{ $empresa->logradouro }}</td>
                    <td>{{ $empresa->complemento }}</td>
                    <td>{{ $empresa->numero }}</td>
                    <td>{{ $empresa->bairro }}</td>
                    <td>{{ $empresa->estado }}</td>
                    <td>{{ $empresa->cidade }}</td>
                    <td>{{ $empresa->aplica_regra_nr7 }}</td>
                    <td>{{ $empresa->grupo_esocial }}</td>
                    <td>{{ $empresa->status }}</td>
                    <td>{{ $empresa->ativo }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('empresas.show', [$empresa->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('empresas.edit', [$empresa->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $empresas])
        </div>
    </div>
</div>
