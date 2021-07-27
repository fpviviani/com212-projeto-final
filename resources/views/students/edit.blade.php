@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editar Aluno</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($student, ['route' => ['students.update', $student->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('students.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'id' => 'save-btn']) !!}
                <a href="{{ route('students.index') }}" class="btn btn-default">Cancelar</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
