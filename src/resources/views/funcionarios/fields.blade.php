<!-- Grupo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupo_id', 'Grupo Id:') !!}
    {!! Form::text('grupo_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Empresa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa_id', 'Empresa Id:') !!}
    {!! Form::text('empresa_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Setor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('setor_id', 'Setor Id:') !!}
    {!! Form::text('setor_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Funcao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('funcao_id', 'Funcao Id:') !!}
    {!! Form::text('funcao_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control', 'required', 'maxlength' => 14, 'maxlength' => 14]) !!}
</div>

<!-- Data Nascimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_nascimento', 'Data Nascimento:') !!}
    {!! Form::text('data_nascimento', null, ['class' => 'form-control','id'=>'data_nascimento']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#data_nascimento').datepicker()
    </script>
@endpush

<!-- Data Admissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_admissao', 'Data Admissao:') !!}
    {!! Form::text('data_admissao', null, ['class' => 'form-control','id'=>'data_admissao']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#data_admissao').datepicker()
    </script>
@endpush

<!-- Sem Vinculo Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('sem_vinculo', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('sem_vinculo', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('sem_vinculo', 'Sem Vinculo', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Matricula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matricula', 'Matricula:') !!}
    {!! Form::text('matricula', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Data Ultima Avaliacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_ultima_avaliacao', 'Data Ultima Avaliacao:') !!}
    {!! Form::text('data_ultima_avaliacao', null, ['class' => 'form-control','id'=>'data_ultima_avaliacao']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#data_ultima_avaliacao').datepicker()
    </script>
@endpush

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Genero:') !!}
    {!! Form::text('genero', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Observacao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacao', 'Observacao:') !!}
    {!! Form::textarea('observacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Ativo Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('ativo', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('ativo', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('ativo', 'Ativo', ['class' => 'form-check-label']) !!}
    </div>
</div>