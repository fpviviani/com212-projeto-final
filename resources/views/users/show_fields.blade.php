<!-- Name Field -->
<div class="col-sm-6">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $user->readable_created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-6">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $user->readable_updated_at }}</p>
</div>

