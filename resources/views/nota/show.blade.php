@extends('layouts.app')

@section('template_title')
    {{ $nota->name ?? "{{ __('Show') Nota" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $nota->name }}
                        </div>
                        <div class="form-group">
                            <strong>Creditos:</strong>
                            {{ $nota->creditos }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $nota->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $nota->date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
