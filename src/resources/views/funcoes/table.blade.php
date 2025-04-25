<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="funcoes-table">
            <thead>
            <tr>
                <th>Empresa Id</th>
                <th>Nome</th>
                <th>Codigo Interno</th>
                <th>Cbo</th>
                <th>Descricao Atividades</th>
                <th>Status</th>
                <th>Ativo</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($funcoes as $funcoes)
                <tr>
                    <td>{{ $funcoes->empresa_id }}</td>
                    <td>{{ $funcoes->nome }}</td>
                    <td>{{ $funcoes->codigo_interno }}</td>
                    <td>{{ $funcoes->cbo }}</td>
                    <td>{{ $funcoes->descricao_atividades }}</td>
                    <td>{{ $funcoes->status }}</td>
                    <td>{{ $funcoes->ativo }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['funcoes.destroy', $funcoes->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('funcoes.show', [$funcoes->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('funcoes.edit', [$funcoes->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $funcoes])
        </div>
    </div>
</div>
