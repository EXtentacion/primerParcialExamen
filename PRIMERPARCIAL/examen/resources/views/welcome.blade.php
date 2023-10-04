@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<h1 class="display-1 text-center text-danger ">Home</h1>

<div class="card" style=
"width: 18rem;  margin-left: auto; margin-right: auto; margin-top: 50px; margin-bottom: 50px;"
>
  <div class="card-body">
    <h5 class="card-title">Examen Primer Parcial</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Castillo Rosales Fernando Mauricio</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="{{route('apodoVista1')}}" class="card-link">Vista1</a>
    

    <a href="{{route('apodoVista2')}}" class="card-link">Vista2</a>

    <a href="{{route('apodoVista3')}}" class="card-link">Vista3</a>
   


  </div>
</div>




@endsection