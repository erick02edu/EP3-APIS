@extends('layouts.app')

@section('template_title')
    {{ $pelicula->name ?? 'Show Pelicula' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pelicula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('peliculas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idpeliculas:</strong>
                            {{ $pelicula->idPeliculas }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pelicula->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $pelicula->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $pelicula->Genero }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $pelicula->Pais }}
                        </div>
                        <div class="form-group">
                            <strong>Distribuidor:</strong>
                            {{ $pelicula->Distribuidor }}
                        </div>
                        <div class="form-group">
                            <strong>Fechasubida:</strong>
                            {{ $pelicula->FechaSubida }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $pelicula->Duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Clasificacion:</strong>
                            {{ $pelicula->Clasificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Poster:</strong>
                            {{ $pelicula->Poster }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
