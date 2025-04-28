<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control', 'maxlength' => 14, 'maxlength' => 14]) !!}
</div>

<!-- Crm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('crm', 'Crm:') !!}
    {!! Form::text('crm', null, ['class' => 'form-control', 'required', 'maxlength' => 8, 'maxlength' => 8]) !!}
</div>

<!-- Uf Crm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uf_crm', 'Uf Crm:') !!}
    {!! Form::text('uf_crm', null, ['class' => 'form-control', 'required', 'maxlength' => 2, 'maxlength' => 2]) !!}
</div>

<!-- Rqe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rqe', 'Rqe:') !!}
    {!! Form::text('rqe', null, ['class' => 'form-control', 'maxlength' => 7, 'maxlength' => 7]) !!}
</div>

<!-- Ativo Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('ativo', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('ativo', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('ativo', 'Ativo', ['class' => 'form-check-label']) !!}
    </div>
</div>