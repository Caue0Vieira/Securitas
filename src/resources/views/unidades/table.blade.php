<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="unidades-table">
            <thead>
            <tr>
                <th>Empresa Id</th>
                <th>Medico Responsavel Id</th>
                <th>Tipo Local Trabalho</th>
                <th>Tipo Inscricao</th>
                <th>Cnpj</th>
                <th>Razao Social</th>
                <th>Nome Referencia</th>
                <th>Cnae</th>
                <th>Atividade</th>
                <th>Grau Risco</th>
                <th>Codigo Interno</th>
                <th>Cep</th>
                <th>Logradouro</th>
                <th>Complemento</th>
                <th>Numero</th>
                <th>Bairro</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Email Responsavel</th>
                <th>Cpf Responsavel Ambiental</th>
                <th>Status</th>
                <th>Ativo</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($unidades as $unidades)
                <tr>
                    <td>{{ $unidades->empresa_id }}</td>
                    <td>{{ $unidades->medico_responsavel_id }}</td>
                    <td>{{ $unidades->tipo_local_trabalho }}</td>
                    <td>{{ $unidades->tipo_inscricao }}</td>
                    <td>{{ $unidades->cnpj }}</td>
                    <td>{{ $unidades->razao_social }}</td>
                    <td>{{ $unidades->nome_referencia }}</td>
                    <td>{{ $unidades->cnae }}</td>
                    <td>{{ $unidades->atividade }}</td>
                    <td>{{ $unidades->grau_risco }}</td>
                    <td>{{ $unidades->codigo_interno }}</td>
                    <td>{{ $unidades->cep }}</td>
                    <td>{{ $unidades->logradouro }}</td>
                    <td>{{ $unidades->complemento }}</td>
                    <td>{{ $unidades->numero }}</td>
                    <td>{{ $unidades->bairro }}</td>
                    <td>{{ $unidades->estado }}</td>
                    <td>{{ $unidades->cidade }}</td>
                    <td>{{ $unidades->email_responsavel }}</td>
                    <td>{{ $unidades->cpf_responsavel_ambiental }}</td>
                    <td>{{ $unidades->status }}</td>
                    <td>{{ $unidades->ativo }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['unidades.destroy', $unidades->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('unidades.show', [$unidades->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('unidades.edit', [$unidades->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $unidades])
        </div>
    </div>
</div>
