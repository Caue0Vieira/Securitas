<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="funcionarios-table">
            <thead>
            <tr>
                <th>Grupo Id</th>
                <th>Empresa Id</th>
                <th>Setor Id</th>
                <th>Funcao Id</th>
                <th>Tipo</th>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Data Nascimento</th>
                <th>Data Admissao</th>
                <th>Sem Vinculo</th>
                <th>Matricula</th>
                <th>Data Ultima Avaliacao</th>
                <th>Genero</th>
                <th>Email</th>
                <th>Status</th>
                <th>Observacao</th>
                <th>Ativo</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($funcionarios as $funcionarios)
                <tr>
                    <td>{{ $funcionarios->grupo_id }}</td>
                    <td>{{ $funcionarios->empresa_id }}</td>
                    <td>{{ $funcionarios->setor_id }}</td>
                    <td>{{ $funcionarios->funcao_id }}</td>
                    <td>{{ $funcionarios->tipo }}</td>
                    <td>{{ $funcionarios->nome }}</td>
                    <td>{{ $funcionarios->cpf }}</td>
                    <td>{{ $funcionarios->data_nascimento }}</td>
                    <td>{{ $funcionarios->data_admissao }}</td>
                    <td>{{ $funcionarios->sem_vinculo }}</td>
                    <td>{{ $funcionarios->matricula }}</td>
                    <td>{{ $funcionarios->data_ultima_avaliacao }}</td>
                    <td>{{ $funcionarios->genero }}</td>
                    <td>{{ $funcionarios->email }}</td>
                    <td>{{ $funcionarios->status }}</td>
                    <td>{{ $funcionarios->observacao }}</td>
                    <td>{{ $funcionarios->ativo }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['funcionarios.destroy', $funcionarios->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('funcionarios.show', [$funcionarios->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('funcionarios.edit', [$funcionarios->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $funcionarios])
        </div>
    </div>
</div>
