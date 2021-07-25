<!-- Name Field -->
<div class="col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $student->name }}</p>
</div>

<!-- Birthdate Field -->
<div class="col-sm-6">
    {!! Form::label('birthdate', 'Data de Nascimento:') !!}
    <p>{{ $student->readable_birthdate }}</p>
</div>

<!-- Registration Number Field -->
<div class="col-sm-6">
    {!! Form::label('registration_number', 'Número de matrícula:') !!}
    <p>{{ $student->registration_number }}</p>
</div>

@if($student->class)
    <!-- Class Field -->
    <div class="col-sm-6">
        {!! Form::label('class', 'Turma:') !!}
        @if($student->class && $student->class->designation)
            <p>{{ $student->class->year }} - {{ $student->class->designation }}</p>
        @else
            <p>{{ $student->class->year }}</p>
        @endif
    </div>
@endif

<!-- Sex Field -->
<div class="col-sm-6">
    {!! Form::label('sex', 'Sexo:') !!}
    <p>{{ $student->sex }}</p>
</div>

<!-- Document Field -->
<div class="col-sm-6">
    {!! Form::label('document', 'CPF:') !!}
    <p>{{ $student->document }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-6">
    {!! Form::label('phone_number', 'Telefone:') !!}
    <p>{{ $student->phone_number }}</p>
</div>

<!-- Responsible Name Field -->
<div class="col-sm-6">
    {!! Form::label('responsible_name', 'Nome do Responsável:') !!}
    <p>{{ $student->responsible_name }}</p>
</div>

<!-- Responsible Document Field -->
<div class="col-sm-6">
    {!! Form::label('responsible_document', 'Documento do Responsável:') !!}
    <p>{{ $student->responsible_document }}</p>
</div>

<!-- Responsible Phone Number Field -->
<div class="col-sm-6">
    {!! Form::label('responsible_phone_number', 'Telefone do Responsável:') !!}
    <p>{{ $student->responsible_phone_number }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Endereço:') !!}
    @if($student->complement)
        <p>{{ $student->address }}, {{ $student->address_number }}. {{ $student->neighborhood }}. {{ $student->complement }}. {{ $student->city }} - {{ $student->state }}. {{ $student->zipcode }}.</p>
    @else
        <p>{{ $student->address }}, {{ $student->address_number }}. {{ $student->neighborhood }}. {{ $student->city }} - {{ $student->state }}. {{ $student->zipcode }}.</p>
    @endif
</div>

<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $student->readable_created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-6">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $student->readable_updated_at }}</p>
</div>

