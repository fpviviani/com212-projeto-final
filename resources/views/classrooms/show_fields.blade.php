<!-- Id Field -->
<div class="col-sm-2">
    {!! Form::label('id', 'Código da Sala:') !!}
    <p>{{ $classroom->id }}</p>
</div>

<!-- Availability Field -->
<div class="col-sm-2">
    {!! Form::label('availability', 'Está Disponível?') !!}
    <p>{{ $classroom->readable_availability }}</p>
</div>

<!-- Capacity Field -->
<div class="col-sm-2">
    {!! Form::label('capacity', 'Capacidade:') !!}
    <p>{{ $classroom->capacity }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-3">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $classroom->readable_created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-3">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $classroom->readable_updated_at }}</p>
</div>

