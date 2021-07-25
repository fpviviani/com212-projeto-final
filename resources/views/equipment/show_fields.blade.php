<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $equipment->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Descrição:') !!}
    <p>{{ $equipment->description }}</p>
</div>

<!-- Buy Date Field -->
<div class="col-sm-12">
    {!! Form::label('buy_date', 'Data da Compra:') !!}
    <p>{{ $equipment->buy_date }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Preço:') !!}
    <p>{{ $equipment->price }}</p>
</div>

<!-- Condition Field -->
<div class="col-sm-12">
    {!! Form::label('condition', 'Condição:') !!}
    <p>{{ $equipment->condition }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $equipment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $equipment->updated_at }}</p>
</div>

