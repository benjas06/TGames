@extends('layouts.tema')

@section('content')
<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Agregar plataforma</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Pages</a><i class="icon-angle-right"></i></li>
              <li class="active">404 Error page</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
        <div class="container">
        <h1>hola mundo</h1>
        <div class="row">
            <div class="col-md-8 offset-2">
                <form action="{{route('plataformas.store')}}"method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="name" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="nombre">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">enviar</button>
                </form>
            </div>
        </div>
    </div>
    </section>
@endsection