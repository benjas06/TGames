@extends('layouts.tema')

@section('content')

    <section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>Agregar</h2>
              </div>
            </div>
            <div class="span8">
              <ul class="breadcrumb">
              <li><a href="{{route('paginas.inicio')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                <li><a href="#">Paginas</a><i class="icon-angle-right"></i></li>
                <li class="active">Agregar juego</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
            <div class="row">
                    <div class="col-md-10 offset-1">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Detalle del genero</h3>
                          </div>
                          <div class="card-body">
                
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Genero</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $genero->id }}</td>
                                        <td>{{ $genero->nombre }}</td>
                                        <td>{{ $genero->genero }}</td>
                                        <td>
                                            <a href="{{  route ('genero.edit', $genero->id )}}" class="btn btn-sm btn-warning">Editar</a>
                
                                            <form action="{{ route('genero.destroy', $genero->id) }}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                
                          </div>
                        </div>
                    </div>
                </div>
      </div>
@endsection