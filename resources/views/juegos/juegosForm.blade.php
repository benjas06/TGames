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
                    <div class="col-8 offset-2">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Agregar juego</h3>
                          </div>
                          <div class="card-body">
                
                                @if(isset($jueg))
                                <form action="{{ route('juegos.update', $jueg->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="PATCH">
                            @else
                                <form action="{{ route('juegos.store') }}" method="POST">
                            @endif
                                @csrf
                
                                <div class="form-group">
                                  <label class="form-label">Juego</label>
                                  {{-- <input type="text" class="form-control" name="nombre" placeholder="Nombre del juego"> --}}
                                  <input type="text" class="form-control" name="nombre" value="{{ isset($jueg) ? $jueg->nombre : '' }}" placeholder="Nombre del juego">
                                </div>
                
                                <div class="form-group">
                                  <label class="form-label">Genero</label>
                                  {{-- <input type="text" class="form-control" name="genero" placeholder="Genero del juego"> --}}
                                  <input type="text" class="form-control" name="genero" value="{{ $jueg->genero ?? '' }}" placeholder="genero del juego">
                                </div>
                
                                <button type="submit" class="btn btn-primary ml-auto">Aceptar</button>
                
                            </form>
                
                          </div>
                        </div>
                    </div>
                </div>
      </div>
@endsection