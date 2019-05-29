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
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
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
                  <tr class="table-dark">
                      <td>{{ $plataforma->id}}</td>
                      <td>{{ $plataforma->nombre}}</td>

                      <td>

                      <a href="route{{'plataformas.edit', $plataforma->id}}" class="btn btn-sm btn-warning">editar</a>
                      
                        <form action="{{route('plataformas.destroy', $plataforma->id)}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button class="btn btn-sm btn-danger">borrar</button>
                        </form>
                      </td>
                  </tr>
              </tbody>
          </table>
	    </div>
    </section>
@endsection