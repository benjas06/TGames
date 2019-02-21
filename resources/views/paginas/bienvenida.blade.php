@extends('layouts.app')

@section('content')
    <h1>hola!!</h1>
    <p>
        hola {{$nombre}} {{$apellido}}
        <br>
        Nombre completo: {{$nombre_completo}}
    </p>
@endsection