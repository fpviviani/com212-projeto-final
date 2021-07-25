<!-- Year Field -->
<div class="col-sm-4">
    {!! Form::label('year', 'Ano:') !!}
    @if($classes->designation)
        <p>{{ $classes->year }} - {{ $classes->designation }}</p>
    @else
        <p>{{ $classes->year }}</p>
    @endif
</div>

<!-- Created At Field -->
<div class="col-sm-4">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ $classes->readable_created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-4">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{{ $classes->readable_updated_at }}</p>
</div>

<!-- Students Field -->
<div class="col-sm-12">
    {!! Form::label('students', 'Alunos matriculados na turma:') !!}
    @foreach($classes->students as $student)
        <div class="row">
            <div class="col">
                <p>{{ $student->name }}</p>
            </div>
        </div>
    @endforeach
</div>