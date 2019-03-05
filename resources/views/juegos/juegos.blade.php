@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-8 offset-2">
        <h1>juegos</h1>
        <table class="table">
            <thead>
                <tr>
                <th>id</th>
                <th>nombre</th>
                <th>genero</th>
                <th>plataforma</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($jueg as $jue)
                <tr class="table-dark">
                    <td>{{ $jue->id}}</td>
                    <td>{{ $jue->nombre}}</td>
                    <td>{{ $jue->genero}}</td>
                    <td>{{ $jue->plataforma_id}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection