@extends('layouts.app')

@section('template_title')
    Pelicula
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pelicula') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('peliculas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Idpeliculas</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Genero</th>
										<th>Pais</th>
										<th>Distribuidor</th>
										<th>Fechasubida</th>
										<th>Duracion</th>
										<th>Clasificacion</th>
										<th>Poster</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peliculas as $pelicula)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pelicula->idPeliculas }}</td>
											<td>{{ $pelicula->Nombre }}</td>
											<td>{{ $pelicula->Descripcion }}</td>
											<td>{{ $pelicula->Genero }}</td>
											<td>{{ $pelicula->Pais }}</td>
											<td>{{ $pelicula->Distribuidor }}</td>
											<td>{{ $pelicula->FechaSubida }}</td>
											<td>{{ $pelicula->Duracion }}</td>
											<td>{{ $pelicula->Clasificacion }}</td>
											<td>{{ $pelicula->Poster }}</td>

                                            <td>
                                                <form action="{{ route('peliculas.destroy',$pelicula->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('peliculas.show',$pelicula->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('peliculas.edit',$pelicula->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $peliculas->links() !!}
            </div>
        </div>
    </div>
@endsection
