<!-- Empresa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa_id', 'Empresa Id:') !!}
    {!! Form::text('empresa_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Medico Responsavel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medico_responsavel_id', 'Medico Responsavel Id:') !!}
    {!! Form::text('medico_responsavel_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Local Trabalho Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_local_trabalho', 'Tipo Local Trabalho:') !!}
    {!! Form::text('tipo_local_trabalho', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
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

<!-- Nome Referencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_referencia', 'Nome Referencia:') !!}
    {!! Form::text('nome_referencia', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
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

<!-- Codigo Interno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_interno', 'Codigo Interno:') !!}
    {!! Form::text('codigo_interno', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', 'Cep:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    {!! Form::text('logradouro', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complemento', 'Complemento:') !!}
    {!! Form::text('complemento', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', 'Cidade:') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Responsavel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_responsavel', 'Email Responsavel:') !!}
    {!! Form::text('email_responsavel', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Cpf Responsavel Ambiental Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf_responsavel_ambiental', 'Cpf Responsavel Ambiental:') !!}
    {!! Form::text('cpf_responsavel_ambiental', null, ['class' => 'form-control', 'maxlength' => 14, 'maxlength' => 14]) !!}
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