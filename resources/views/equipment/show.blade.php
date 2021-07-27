@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detalhes do Equipamento</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('equipment.index') }}">
                        Voltar
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            <div class="card-body verBusca">
                <div class="row">
                    @include('equipment.show_fields')
                </div>
            </div>

        </div>
    </div>
@endsection
