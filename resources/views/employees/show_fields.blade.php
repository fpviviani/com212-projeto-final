<!-- Name Field -->
<div class="col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $employee->name }}</p>
</div>

<!-- Birthdate Field -->
<div class="col-sm-6">
    {!! Form::label('birthdate', 'Data de Nascimento:') !!}
    <p>{{ $employee->readable_birthdate }}</p>
</div>

<!-- Sex Field -->
<div class="col-sm-6">
    {!! Form::label('sex', 'Sexo:') !!}
    <p>{{ $employee->sex }}</p>
</div>

<!-- Document Field -->
<div class="col-sm-6">
    {!! Form::label('document', 'CPF:') !!}
    <p>{{ $employee->document }}</p>
</div>

<!-- Phone Numer Field -->
<div class="col-sm-6">
    {!! Form::label('phone_numer', 'Telefone:') !!}
    <p>{{ $employee->phone_numer }}</p>
</div>

<!-- Employee Type Field -->
<div class="col-sm-6">
    {!! Form::label('employee_type', 'Função:') !!}
    <p>{{ $employee->employee_type }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Endereço:') !!}
    @if($employee->complement)
        <p>{{ $employee->address }}, {{ $employee->address_number }}. {{ $employee->neighborhood }}. {{ $employee->complement }}. {{ $employee->city }} - {{ $employee->state }}. {{ $employee->zipcode }}.</p>
    @else
        <p>{{ $employee->address }}, {{ $employee->address_number }}. {{ $employee->neighborhood }}. {{ $employee->city }} - {{ $employee->state }}. {{ $employee->zipcode }}.</p>
    @endif
</div>

<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $employee->readable_created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-6">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $employee->readable_updated_at }}</p>
</div>

