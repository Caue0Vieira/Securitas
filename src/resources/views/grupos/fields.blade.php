<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}

    {{-- Input file escondido --}}
    {!! Form::file('logo', ['id' => 'logo', 'style' => 'display: none;', 'accept' => 'image/*']) !!}

    {{-- Botão estilizado usando Laravel Collective --}}
    {!! Form::button('Upload Logo', [
        'type' => 'button',
        'class' => 'upload-button',
        'onclick' => "document.getElementById('logo').click()"
    ]) !!}
</div>



<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Ativo Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        <!-- Campo oculto para valor 0 -->
        {!! Form::hidden('ativo', 0, ['class' => 'form-check-input']) !!}

        <!-- Checkbox estilizado como toggle switch -->
        <label class="toggle-switch">
            {!! Form::checkbox('ativo', '1', null, ['class' => 'toggle-checkbox']) !!}
            <span class="slider"></span>
        </label>

        <!-- Label -->
        {!! Form::label('ativo', 'Ativo', ['class' => 'form-check-label']) !!}
    </div>
</div>
