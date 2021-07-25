<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthdate', 'Data de Nascimento:') !!}
    {!! Form::text('birthdate', null, ['class' => 'form-control date-mask', 'required']) !!}
</div>

<!-- Sex Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sex', 'Sexo:') !!}
    {!! Form::select('sex', ['' => 'Selecione o sexo:']+ $sexes, null, ['class' => 'form-control first-disabled', 'required']) !!}
</div>

<!-- Document Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document', 'CPF:') !!}
    {!! Form::text('document', null, ['class' => 'form-control cpf-mask', 'required']) !!}
</div>

<!-- Phone Numer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_numer', 'Telefone:') !!}
    {!! Form::text('phone_numer', null, ['class' => 'form-control phone-mask', 'required']) !!}
</div>

<!-- Employee Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_type', 'Função:') !!}
    {!! Form::select('employee_type', ['' => 'Selecione a função:']+ $types, null, ['class' => 'form-control first-disabled', 'required']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Endereço:') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Address Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_number', 'Número do endereço:') !!}
    {!! Form::text('address_number', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Complement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complement', 'Complemento:') !!}
    {!! Form::text('complement', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Neighborhood Field -->
<div class="form-group col-sm-6">
    {!! Form::label('neighborhood', 'Bairro:') !!}
    {!! Form::text('neighborhood', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'Cidade:') !!}
    {!! Form::text('city', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'Estado:') !!}
    {!! Form::text('state', null, ['class' => 'form-control state-mask', 'required']) !!}
</div>

<!-- Zipcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zipcode', 'CEP:') !!}
    {!! Form::text('zipcode', null, ['class' => 'form-control zipcode-mask', 'required']) !!}
</div>