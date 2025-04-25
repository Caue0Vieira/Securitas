<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="setores-table">
            <thead>
            <tr>
                <th>Empresa Id</th>
                <th>Nome</th>
                <th>Codigo Interno</th>
                <th>Descricao</th>
                <th>Enviar Descricao Esocial</th>
                <th>Incluir Dados Edificacao</th>
                <th>Status</th>
                <th>Ativo</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($setores as $setores)
                <tr>
                    <td>{{ $setores->empresa_id }}</td>
                    <td>{{ $setores->nome }}</td>
                    <td>{{ $setores->codigo_interno }}</td>
                    <td>{{ $setores->descricao }}</td>
                    <td>{{ $setores->enviar_descricao_esocial }}</td>
                    <td>{{ $setores->incluir_dados_edificacao }}</td>
                    <td>{{ $setores->status }}</td>
                    <td>{{ $setores->ativo }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['setores.destroy', $setores->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('setores.show', [$setores->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('setores.edit', [$setores->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $setores])
        </div>
    </div>
</div>
