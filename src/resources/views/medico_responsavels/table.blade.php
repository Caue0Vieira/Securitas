<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="medico-responsavels-table">
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
            @foreach($medicoResponsavels as $medicoResponsavel)
                <tr>
                    <td>{{ $medicoResponsavel->nome }}</td>
                    <td>{{ $medicoResponsavel->cpf }}</td>
                    <td>{{ $medicoResponsavel->crm }}</td>
                    <td>{{ $medicoResponsavel->uf_crm }}</td>
                    <td>{{ $medicoResponsavel->rqe }}</td>
                    <td>{{ $medicoResponsavel->ativo }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['medicoResponsavels.destroy', $medicoResponsavel->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('medicoResponsavels.show', [$medicoResponsavel->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('medicoResponsavels.edit', [$medicoResponsavel->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $medicoResponsavels])
        </div>
    </div>
</div>
