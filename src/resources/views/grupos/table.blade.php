<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="grupos-table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Logo</th>
                <th>Status</th>
                <th>Ativo</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($grupos as $grupos)
                <tr>
                    <td>{{ $grupos->nome }}</td>
                    <td>{{ $grupos->logo }}</td>
                    <td>{{ $grupos->status }}</td>
                    <td>{{ $grupos->ativo }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['grupos.destroy', $grupos->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('grupos.show', [$grupos->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('grupos.edit', [$grupos->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $grupos])
        </div>
    </div>
</div>
