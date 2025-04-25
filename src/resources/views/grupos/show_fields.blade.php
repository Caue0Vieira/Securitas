<!-- Nome Field -->
<div class="col-sm-12">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{{ $grupo->nome }}</p>
</div>

<!-- Logo Field -->
<div class="col-sm-12">
    {!! Form::label('logo', 'Logo:') !!}
    <p>{{ $grupo->logo }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $grupo->status }}</p>
</div>

<!-- Ativo Field -->
<div class="col-sm-12">
    {!! Form::label('ativo', 'Ativo:') !!}
    <p>{{ $grupo->ativo }}</p>
</div>

