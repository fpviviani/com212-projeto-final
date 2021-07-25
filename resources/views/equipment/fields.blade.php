<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Condition Field -->
<div class="form-group col-sm-6">
    {!! Form::label('condition', 'Condição:') !!}
    {!! Form::select('condition', ['' => 'Selecione a condição:']+ $conditions, null, ['class' => 'form-control first-disabled', 'required']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Descrição:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Buy Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('buy_date', 'Data da Compra:') !!}
    {!! Form::text('buy_date', null, ['class' => 'form-control date-mask', 'required']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Preço:') !!}
    {!! Form::text('price', null, ['class' => 'form-control money-mask', 'required']) !!}
</div>