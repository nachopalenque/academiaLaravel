@extends('layout/template')
@section('title','Ver Alumno')
@section('content')

<h2>Ver:</h2>
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Nombre:</strong> {{$alumno->nombre}}</li>
    <li class="list-group-item"><strong>Matricula:</strong> {{$alumno->matricula}}</li>
    <li class="list-group-item"><strong>Fecha de nacimiento:</strong> {{$alumno->fecha_nacimiento}}</li>
    <li class="list-group-item"><strong>Teléfono: </strong> {{$alumno->telefono}}</li>
    <li class="list-group-item"><strong>Email: </strong> {{$alumno->email}}</li>
  </ul>
</div>
@endsection