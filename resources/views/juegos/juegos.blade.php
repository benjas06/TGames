@extends('layouts.tema')

@section('content')

    <section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>Juegos</h2>
              </div>
            </div>
            <div class="span8">
              <ul class="breadcrumb">
              <li><a href="{{route('paginas.inicio')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                <li><a href="#">Paginas</a><i class="icon-angle-right"></i></li>
                <li class="active">Juegos</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
<div class="row">
    <div class="col-8 offset-2">
        <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Plataforma</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($jueg as $jue)
                <tr class="table-dark">
                    <td>{{ $jue->id}}</td>
                    <td>{{ $jue->nombre}}</td>
                    <td>{{ $jue->genero}}</td>
                    <td>{{ $jue->plataforma_id}}</td>
                    <td>
                        <a href="{{ route('juegos.show', $jue->id) }}"class="btn btn-info">Detalle</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection