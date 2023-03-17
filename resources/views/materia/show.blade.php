@extends('layouts.app')

@section('template_title')
    {{ $materia->name ?? "{{ __('Show') Materia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idnotas:</strong>
                            {{ $materia->idNotas }}
                        </div>
                        <div class="form-group">
                            <strong>Idperiodo:</strong>
                            {{ $materia->idPeriodo }}
                        </div>
                        <div class="form-group">
                            <strong>Idcurso:</strong>
                            {{ $materia->idCurso }}
                        </div>
                        <div class="form-group">
                            <strong>Idestudiante:</strong>
                            {{ $materia->idestudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Nota3:</strong>
                            {{ $materia->nota3 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota2:</strong>
                            {{ $materia->nota2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota1:</strong>
                            {{ $materia->nota1 }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $materia->date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
