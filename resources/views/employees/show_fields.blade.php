<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $employee->name }}</p>
</div>

<!-- Birthdate Field -->
<div class="col-sm-12">
    {!! Form::label('birthdate', 'Data de Nascimento:') !!}
    <p>{{ $employee->birthdate }}</p>
</div>

<!-- Sex Field -->
<div class="col-sm-12">
    {!! Form::label('sex', 'Sexo:') !!}
    <p>{{ $employee->sex }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Endereço:') !!}
    <p>{{ $employee->address }}</p>
</div>

<!-- Address Number Field -->
<div class="col-sm-12">
    {!! Form::label('address_number', 'Número do endereço:') !!}
    <p>{{ $employee->address_number }}</p>
</div>

@if($employee->complement)
    <!-- Complement Field -->
    <div class="col-sm-12">
        {!! Form::label('complement', 'Complemento:') !!}
        <p>{{ $employee->complement }}</p>
    </div>
@endif

<!-- Neighborhood Field -->
<div class="col-sm-12">
    {!! Form::label('neighborhood', 'Bairro:') !!}
    <p>{{ $employee->neighborhood }}</p>
</div>

<!-- City Field -->
<div class="col-sm-12">
    {!! Form::label('city', 'Cidade:') !!}
    <p>{{ $employee->city }}</p>
</div>

<!-- State Field -->
<div class="col-sm-12">
    {!! Form::label('state', 'Estado:') !!}
    <p>{{ $employee->state }}</p>
</div>

<!-- Zipcode Field -->
<div class="col-sm-12">
    {!! Form::label('zipcode', 'CEP:') !!}
    <p>{{ $employee->zipcode }}</p>
</div>

<!-- Document Field -->
<div class="col-sm-12">
    {!! Form::label('document', 'CPF:') !!}
    <p>{{ $employee->document }}</p>
</div>

<!-- Phone Numer Field -->
<div class="col-sm-12">
    {!! Form::label('phone_numer', 'Telefone:') !!}
    <p>{{ $employee->phone_numer }}</p>
</div>

<!-- Employee Type Field -->
<div class="col-sm-12">
    {!! Form::label('employee_type', 'Função:') !!}
    <p>{{ $employee->employee_type }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $employee->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $employee->updated_at }}</p>
</div>

