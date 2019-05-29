@extends('layouts.tema')

@section('content')

    <section id="inner-headline">
        <div class="container">
          <div class="row">
            <div class="span4">
              <div class="inner-heading">
                <h2>Generos</h2>
              </div>
            </div>
            <div class="span8">
              <ul class="breadcrumb">
              <li><a href="{{route('paginas.inicio')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                <li><a href="#">Paginas</a><i class="icon-angle-right"></i></li>
                <li class="active">Generos</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
<div class="container">
        <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($gen as $ge)
                <tr class="table-dark">
                    <td>{{ $ge->id}}</td>
                    <td>{{ $ge->nombre}}</td>
                    <td>
                        <a href="{{ route('genero.show', $ge->id) }}"class="btn btn-info">Detalle</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
@endsection