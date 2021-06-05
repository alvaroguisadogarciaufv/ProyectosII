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
                            <span class="card-title">Show Preguntasm</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preguntasm.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $preguntasm->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $preguntasm->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Respuesta:</strong>
                            {{ $preguntasm->respuesta }}
                        </div>

                    </div>
                    <a class="btn btn-sm btn-success" href="{{ route('preguntasm.edit',$preguntasm->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>

                </div>
            </div>
        </div>
    </section>
@endsection

