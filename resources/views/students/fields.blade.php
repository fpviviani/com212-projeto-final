<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_id', 'Turma:') !!}
    {!! Form::select('class_id', ['' => 'Selecione a turma:']+ $classes, null, ['class' => 'form-control first-disabled', 'required']) !!}
</div>

<!-- Registration Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registration_number', 'Número de matrícula:') !!}
    {!! Form::text('registration_number', null, ['class' => 'form-control', 'required']) !!}
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

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Telefone:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control phone-mask', 'required']) !!}
</div>

<!-- Responsible Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('responsible_name', 'Nome do Responsável:') !!}
    {!! Form::text('responsible_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Responsible Document Field -->
<div class="form-group col-sm-6">
    {!! Form::label('responsible_document', 'Documento do Responsável:') !!}
    {!! Form::text('responsible_document', null, ['class' => 'form-control cpf-mask', 'required']) !!}
</div>

<!-- Responsible Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('responsible_phone_number', 'Telefone do Responsável:') !!}
    {!! Form::text('responsible_phone_number', null, ['class' => 'form-control phone-mask', 'required']) !!}
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