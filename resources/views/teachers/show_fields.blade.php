<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $teacher->name }}</p>
</div>

<!-- Birthdate Field -->
<div class="col-sm-12">
    {!! Form::label('birthdate', 'Data de Nascimento:') !!}
    <p>{{ $teacher->birthdate }}</p>
</div>

<!-- Sex Field -->
<div class="col-sm-12">
    {!! Form::label('sex', 'Sexo:') !!}
    <p>{{ $teacher->sex }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Endereço:') !!}
    <p>{{ $teacher->address }}</p>
</div>

<!-- Address Number Field -->
<div class="col-sm-12">
    {!! Form::label('address_number', 'Número do endereço:') !!}
    <p>{{ $teacher->address_number }}</p>
</div>

@if($teacher->complement)
    <!-- Complement Field -->
    <div class="col-sm-12">
        {!! Form::label('complement', 'Complemento:') !!}
        <p>{{ $teacher->complement }}</p>
    </div>
@endif

<!-- Neighborhood Field -->
<div class="col-sm-12">
    {!! Form::label('neighborhood', 'Bairro:') !!}
    <p>{{ $teacher->neighborhood }}</p>
</div>

<!-- City Field -->
<div class="col-sm-12">
    {!! Form::label('city', 'Cidade:') !!}
    <p>{{ $teacher->city }}</p>
</div>

<!-- State Field -->
<div class="col-sm-12">
    {!! Form::label('state', 'Estado:') !!}
    <p>{{ $teacher->state }}</p>
</div>

<!-- Zipcode Field -->
<div class="col-sm-12">
    {!! Form::label('zipcode', 'CEP:') !!}
    <p>{{ $teacher->zipcode }}</p>
</div>

<!-- Document Field -->
<div class="col-sm-12">
    {!! Form::label('document', 'CPF:') !!}
    <p>{{ $teacher->document }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Telefone:') !!}
    <p>{{ $teacher->phone_number }}</p>
</div>

<!-- Subjects Field -->
<div class="col-sm-12">
    {!! Form::label('subjects', 'Disciplinas:') !!}
    <p>{{ $teacher->subjects }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $teacher->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $teacher->updated_at }}</p>
</div>

