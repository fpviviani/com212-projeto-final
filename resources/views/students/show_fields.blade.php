<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $student->name }}</p>
</div>

<!-- Birthdate Field -->
<div class="col-sm-12">
    {!! Form::label('birthdate', 'Data de Nascimento:') !!}
    <p>{{ $student->birthdate }}</p>
</div>

<!-- Registration Number Field -->
<div class="col-sm-12">
    {!! Form::label('registration_number', 'Número de matrícula:') !!}
    <p>{{ $student->registration_number }}</p>
</div>

@if($student->class)
    <!-- Class Field -->
    <div class="col-sm-12">
        {!! Form::label('class', 'Turma:') !!}
        @if($student->class && $student->class->designation)
            <p>{{ $student->class->year }} - {{ $student->class->designation }}</p>
        @else
            <p>{{ $student->class->year }}</p>
        @endif
    </div>
@endif

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Endereço:') !!}
    <p>{{ $student->address }}</p>
</div>

<!-- Address Number Field -->
<div class="col-sm-12">
    {!! Form::label('address_number', 'Número do endereço:') !!}
    <p>{{ $student->address_number }}</p>
</div>

@if($student->complement)
    <!-- Complement Field -->
    <div class="col-sm-12">
        {!! Form::label('complement', 'Complemento:') !!}
        <p>{{ $student->complement }}</p>
    </div>
@endif

<!-- Neighborhood Field -->
<div class="col-sm-12">
    {!! Form::label('neighborhood', 'Bairro:') !!}
    <p>{{ $student->neighborhood }}</p>
</div>

<!-- City Field -->
<div class="col-sm-12">
    {!! Form::label('city', 'Cidade:') !!}
    <p>{{ $student->city }}</p>
</div>

<!-- State Field -->
<div class="col-sm-12">
    {!! Form::label('state', 'Estado:') !!}
    <p>{{ $student->state }}</p>
</div>

<!-- Zipcode Field -->
<div class="col-sm-12">
    {!! Form::label('zipcode', 'CEP:') !!}
    <p>{{ $student->zipcode }}</p>
</div>

<!-- Sex Field -->
<div class="col-sm-12">
    {!! Form::label('sex', 'Sexo:') !!}
    <p>{{ $student->sex }}</p>
</div>

<!-- Document Field -->
<div class="col-sm-12">
    {!! Form::label('document', 'CPF:') !!}
    <p>{{ $student->document }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Telefone:') !!}
    <p>{{ $student->phone_number }}</p>
</div>

<!-- Responsible Name Field -->
<div class="col-sm-12">
    {!! Form::label('responsible_name', 'Nome do Responsável:') !!}
    <p>{{ $student->responsible_name }}</p>
</div>

<!-- Responsible Document Field -->
<div class="col-sm-12">
    {!! Form::label('responsible_document', 'Documento do Responsável:') !!}
    <p>{{ $student->responsible_document }}</p>
</div>

<!-- Responsible Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('responsible_phone_number', 'Telefone do Responsável:') !!}
    <p>{{ $student->responsible_phone_number }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $student->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $student->updated_at }}</p>
</div>

