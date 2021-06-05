@extends('layouts.app')

@section('template_title')
    {{ $preguntasm->name ?? 'Show Preguntasm' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar pregunta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preguntasf.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $preguntasf->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $preguntasf->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Respuesta:</strong>
                            {{ $preguntasf->respuesta }}
                        </div>

                    </div>
                    <a class="btn btn-sm btn-success" href="{{ route('preguntasf.edit',$preguntasf->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>

                </div>
            </div>
        </div>
    </section>
@endsection
