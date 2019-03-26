@extends('layouts.tema')

@section('content')
<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>listado de plataformas</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
            <li><a href="{{route('paginas.inicio')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Pages</a><i class="icon-angle-right"></i></li>
              <li class="active">listado de plataformas</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
          <table class="table">
              <thead>
                  <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($plataformas as $plataforma)
                  <tr class="table-dark">
                      <td>{{ $plataforma->id}}</td>
                      <td>{{ $plataforma->nombre}}</td>

                      <td>
                      <a href="{{route('plataformas.show', $plataforma->id)}}" class="btn btn-info">detalle</a>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
	    </div>
    </section>
@endsection