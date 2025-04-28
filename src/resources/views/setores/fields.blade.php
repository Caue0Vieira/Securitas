<!-- Empresa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa_id', 'Empresa Id:') !!}
    {!! Form::text('empresa_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Codigo Interno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_interno', 'Codigo Interno:') !!}
    {!! Form::text('codigo_interno', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Enviar Descricao Esocial Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('enviar_descricao_esocial', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('enviar_descricao_esocial', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('enviar_descricao_esocial', 'Enviar Descricao Esocial', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Incluir Dados Edificacao Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('incluir_dados_edificacao', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('incluir_dados_edificacao', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('incluir_dados_edificacao', 'Incluir Dados Edificacao', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Ativo Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('ativo', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('ativo', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('ativo', 'Ativo', ['class' => 'form-check-label']) !!}
    </div>
</div>