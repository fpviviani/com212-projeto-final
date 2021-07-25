<!-- Year Field -->
<div class="col-sm-12">
    {!! Form::label('year', 'Ano:') !!}
    <p>{{ $classes->year }}</p>
</div>

<!-- Designation Field -->
<div class="col-sm-12">
    {!! Form::label('designation', 'Designação:') !!}
    <p>{{ $classes->designation }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $classes->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $classes->updated_at }}</p>
</div>

