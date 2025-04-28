<!-- Nome Field -->
<div class="col-sm-12">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{{ $grupos->nome }}</p>
</div>

<!-- Logo Field -->
<div class="col-sm-12">
    {!! Form::label('logo', 'Logo:') !!}
    <p>{{ $grupos->logo }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $grupos->status }}</p>
</div>

<!-- Ativo Field -->
<div class="col-sm-12">
    {!! Form::label('ativo', 'Ativo:') !!}
    <p>{{ $grupos->ativo }}</p>
</div>

