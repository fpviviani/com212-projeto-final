@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Relatório Geral</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        <div class="clearfix"></div>
        <div class="card general-report">
            <div class="card-header">
                <img src="{{ asset('images/ColegioNoBG.png') }}" style="max-height:8rem">
            </div>
            <div class="card-body general-report-body">
                <div class="row">
                    <div class="col">
                        <h5>Este relatório apresenta uma situação geral do Colégio Prof. Sebastião Lukadovic na data de {{ \Carbon\Carbon::now()->format('d/m/Y') }}</h5>
                    </div>
                </div>
                <div id="turmas">
                    <div class="row">
                        <div class="col" style="margin-top:1rem">
                            <b>Turmas</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:1rem">
                            <p>Turmas cadastradas no sistema:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-1rem">
                            @if(count($classes) > 1)
                                <p>{{count($classes)}} turmas.</p>
                            @else
                                <p>{{count($classes)}} turma.</p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-left:1rem">
                            <p>Listagem das turmas:</p>
                        </div>
                    </div>
                    @foreach($classes as $class)
                        <div class="row">
                            <div class="col-md-6" style="margin-left:2rem">
                                <p>{{ $class->year }}
                                    @if($class->designation)
                                        - {{ $class->designation }}
                                    @endif
                                    :
                                </p>
                            </div>
                            <div class="col-md-6" style="margin-left:-2rem">
                                @if(count($class->students) > 1)
                                    <p>{{count($class->students)}} alunos.</p>
                                @else
                                    <p>{{count($class->students)}} aluno.</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="salas">
                    <div class="row">
                        <div class="col" style="margin-top:1rem">
                            <b>Salas de Aula</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:1rem">
                            <p>Salas de Aula cadastradas no sistema:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-1rem">
                            @if(count($classrooms) > 1)
                                <p>{{count($classrooms)}} salas de aula.</p>
                            @else
                                <p>{{count($classrooms)}} sala de aula.</p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-left:1rem">
                            <p>Listagem das salas:</p>
                        </div>
                    </div>
                    @foreach($classrooms as $classroom)
                        <div class="row" style="margin-left:2rem">
                            <div class="col-md-4">
                                <p>Sala {{ $classroom->id }}:</p>
                            </div>
                            <div class="col-md-4">
                                @if($classroom->capacity > 1)
                                    <p>Capacidade: {{$classroom->capacity}} alunos.</p>
                                @else
                                    <p>Capacidade: {{$classroom->capacity}} aluno.</p>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <p>Disponível? {{$classroom->readable_availability}}.</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="equipamentos">
                    <div class="row" style="margin-top:1rem">
                        <div class="col">
                            <b>Equipamentos</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:1rem">
                            <p>Equipamentos cadastradas no sistema:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-1rem">
                            @if(count($equipments) > 1)
                                <p>{{count($equipments)}} equipamentos.</p>
                            @else
                                <p>{{count($equipments)}} equipamento.</p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-left:1rem">
                            <p>Condição dos equipamentos:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Em funcionamento:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $conditions['Em funcionamento'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Precisa de reparos:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $conditions['Precisa de reparos'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Fora de uso:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $conditions['Fora de uso'] }}</p>
                        </div>
                    </div>
                </div>
                <div id="alunos">
                    <div class="row">
                        <div class="col" style="margin-top:1rem">
                            <b>Alunos</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:1rem">
                            <p>Alunos cadastrados no sistema:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-1rem">
                            @if(count($students) > 1)
                                <p>{{count($students)}} alunos.</p>
                            @else
                                <p>{{count($students)}} aluno.</p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-left:1rem">
                            <p>Alunos por gênero:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Masculino:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $students_sexes['Masculino'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Feminino:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $students_sexes['Feminino'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Não Binário:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $students_sexes['Não Binário'] }}</p>
                        </div>
                    </div>
                </div>
                <div id="professores">
                    <div class="row">
                        <div class="col" style="margin-top:1rem">
                            <b>Professores</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:1rem">
                            <p>Professores cadastrados no sistema:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-1rem">
                            @if(count($teachers) > 1)
                                <p>{{count($teachers)}} professores.</p>
                            @else
                                <p>{{count($teachers)}} professor.</p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-left:1rem">
                            <p>Professores por gênero:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Masculino:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $teachers_sexes['Masculino'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Feminino:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $teachers_sexes['Feminino'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Não Binário:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $teachers_sexes['Não Binário'] }}</p>
                        </div>
                    </div>
                </div>
                <div id="funcionarios">
                    <div class="row">
                        <div class="col" style="margin-top:1rem">
                            <b>Funcionários</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:1rem">
                            <p>Funcionários cadastrados no sistema:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-1rem">
                            @if(count($employees) > 1)
                                <p>{{count($employees)}} funcionários.</p>
                            @else
                                <p>{{count($employees)}} funcionário.</p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-left:1rem">
                            <p>Funcionários por função:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Diretoria:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $types['Diretoria'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Secretariado:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $types['Secretariado'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-left:2rem">
                            <p>Limpeza:</p>
                        </div>
                        <div class="col-md-6" style="margin-left:-2rem">
                            <p>{{ $types['Limpeza'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

