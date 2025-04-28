<!-- Grupo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupo_id', 'Grupo Id:') !!}
    {!! Form::text('grupo_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Medico Responsavel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medico_responsavel_id', 'Medico Responsavel Id:') !!}
    {!! Form::text('medico_responsavel_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Inscricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_inscricao', 'Tipo Inscricao:') !!}
    {!! Form::text('tipo_inscricao', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', 'Cnpj:') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control', 'required', 'maxlength' => 18, 'maxlength' => 18]) !!}
</div>

<!-- Razao Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razao_social', 'Razao Social:') !!}
    {!! Form::text('razao_social', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Nome Fantasia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_fantasia', 'Nome Fantasia:') !!}
    {!! Form::text('nome_fantasia', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Cnae Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnae', 'Cnae:') !!}
    {!! Form::text('cnae', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Atividade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atividade', 'Atividade:') !!}
    {!! Form::text('atividade', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Grau Risco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grau_risco', 'Grau Risco:') !!}
    {!! Form::text('grau_risco', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', 'Cep:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    {!! Form::text('logradouro', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complemento', 'Complemento:') !!}
    {!! Form::text('complemento', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', 'Cidade:') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Aplica Regra Nr7 Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('aplica_regra_nr7', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('aplica_regra_nr7', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('aplica_regra_nr7', 'Aplica Regra Nr7', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Grupo Esocial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupo_esocial', 'Grupo Esocial:') !!}
    {!! Form::text('grupo_esocial', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
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