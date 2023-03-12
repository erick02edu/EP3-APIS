<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idPeliculas') }}
            {{ Form::text('idPeliculas', $pelicula->idPeliculas, ['class' => 'form-control' . ($errors->has('idPeliculas') ? ' is-invalid' : ''), 'placeholder' => 'Idpeliculas']) }}
            {!! $errors->first('idPeliculas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $pelicula->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $pelicula->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Genero') }}
            {{ Form::text('Genero', $pelicula->Genero, ['class' => 'form-control' . ($errors->has('Genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('Genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pais') }}
            {{ Form::text('Pais', $pelicula->Pais, ['class' => 'form-control' . ($errors->has('Pais') ? ' is-invalid' : ''), 'placeholder' => 'Pais']) }}
            {!! $errors->first('Pais', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Distribuidor') }}
            {{ Form::text('Distribuidor', $pelicula->Distribuidor, ['class' => 'form-control' . ($errors->has('Distribuidor') ? ' is-invalid' : ''), 'placeholder' => 'Distribuidor']) }}
            {!! $errors->first('Distribuidor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaSubida') }}
            {{ Form::text('FechaSubida', $pelicula->FechaSubida, ['class' => 'form-control' . ($errors->has('FechaSubida') ? ' is-invalid' : ''), 'placeholder' => 'Fechasubida']) }}
            {!! $errors->first('FechaSubida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Duracion') }}
            {{ Form::text('Duracion', $pelicula->Duracion, ['class' => 'form-control' . ($errors->has('Duracion') ? ' is-invalid' : ''), 'placeholder' => 'Duracion']) }}
            {!! $errors->first('Duracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Clasificacion') }}
            {{ Form::text('Clasificacion', $pelicula->Clasificacion, ['class' => 'form-control' . ($errors->has('Clasificacion') ? ' is-invalid' : ''), 'placeholder' => 'Clasificacion']) }}
            {!! $errors->first('Clasificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Poster') }}
            {{ Form::text('Poster', $pelicula->Poster, ['class' => 'form-control' . ($errors->has('Poster') ? ' is-invalid' : ''), 'placeholder' => 'Poster']) }}
            {!! $errors->first('Poster', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>