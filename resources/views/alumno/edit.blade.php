@extends('layout/template')
@section('title','Editar Alumno')
@section('content')

<h2>Editar:</h2>
<form action="{{url('/alumnos/'.$id)}}" method="post">
    @method("PUT")
    @csrf

    <section class="mb-3">
        <label for="nombre" class="form-label" id="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$alumno->nombre}}">
    </section>

    <section class="mb-3">
        <label for="matricula" class="form-label" id="matricula">Matricula</label>
        <input type="text" name="matricula" id="matricula" class="form-control" value="{{$alumno->matricula}}">
    </section>

    <section class="mb-3">
    <label for="fecha_nacimiento" class="form-label" id="fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"  value="{{$alumno->fecha_nacimiento}}" class="form-control">
    </section>

    <section class="mb-3">
    <label for="telefono" class="form-label" id="telefono">Telefono: </label>
    <input type="text" name="telefono" id="telefono" value="{{$alumno->telefono}}" class="form-control">
    </section>

    <section class="mb-3">
    <label for="email" class="form-label" id="email">Email: </label>
    <input type="email" name="email" id="email" value="{{$alumno->email}}"class="form-control">
    </section>

    <button type="submit" class="btn btn-primary">Guardar</button>

</form>
@endsection