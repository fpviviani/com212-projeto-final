<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Código da Sala:') !!}
    {!! Form::number('id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacidade:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Availability Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('availability', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('availability', '1', null, ['class' => 'form-check-input', 'id' => 'classroom-checkbox']) !!}
        {!! Form::label('availability', 'Está Disponível?', ['class' => 'form-check-label']) !!}
    </div>
</div>  