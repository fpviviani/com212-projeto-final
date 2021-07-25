<!-- Name Field -->
<div class="col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $teacher->name }}</p>
</div>

<!-- Birthdate Field -->
<div class="col-sm-6">
    {!! Form::label('birthdate', 'Data de Nascimento:') !!}
    <p>{{ $teacher->readable_birthdate }}</p>
</div>

<!-- Sex Field -->
<div class="col-sm-6">
    {!! Form::label('sex', 'Sexo:') !!}
    <p>{{ $teacher->sex }}</p>
</div>

<!-- Document Field -->
<div class="col-sm-6">
    {!! Form::label('document', 'CPF:') !!}
    <p>{{ $teacher->document }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-6">
    {!! Form::label('phone_number', 'Telefone:') !!}
    <p>{{ $teacher->phone_number }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Endereço:') !!}
    @if($teacher->complement)
        <p>{{ $teacher->address }}, {{ $teacher->address_number }}. {{ $teacher->neighborhood }}. {{ $teacher->complement }}. {{ $teacher->city }} - {{ $teacher->state }}. {{ $teacher->zipcode }}.</p>
    @else
        <p>{{ $teacher->address }}, {{ $teacher->address_number }}. {{ $teacher->neighborhood }}. {{ $teacher->city }} - {{ $teacher->state }}. {{ $teacher->zipcode }}.</p>
    @endif
</div>

<!-- Subjects Field -->
<div class="col-sm-12">
    {!! Form::label('subjects', 'Disciplinas:') !!}
    <p>{{ $teacher->subjects }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $teacher->readable_created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-6">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $teacher->readable_updated_at }}</p>
</div>

