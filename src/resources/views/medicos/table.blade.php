<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="medicos-table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Crm</th>
                <th>Uf Crm</th>
                <th>Rqe</th>
                <th>Ativo</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($medicos as $medicos)
                <tr>
                    <td>{{ $medicos->nome }}</td>
                    <td>{{ $medicos->cpf }}</td>
                    <td>{{ $medicos->crm }}</td>
                    <td>{{ $medicos->uf_crm }}</td>
                    <td>{{ $medicos->rqe }}</td>
                    <td>{{ $medicos->ativo }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['medicos.destroy', $medicos->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('medicos.show', [$medicos->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('medicos.edit', [$medicos->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $medicos])
        </div>
    </div>
</div>
