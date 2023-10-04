@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<h1 class="display-1 text-center text-danger ">Home</h1>

<div class="card" style= 
"width: 18rem; margin-left: auto; margin-right: auto; margin-top: 50px; margin-bottom: 50px;">
  <div class="card-body">
    <h5 class="card-title">Card examen Primer parcial</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Fernando Mauricio Castillo Rosales </h6>
    <p class="card-text">
        Carta de tipo texto
    </p>
    <a href="{{route('apodoVista1')}}" class="card-link">Card Vista1</a>
    <a href="{{route('apodoVista2')}}" class="card-link">Card Visat2</a>
  </div>
</div>



@endsection