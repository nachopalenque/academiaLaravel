@extends('layout/template')
@section('title','Nuevo Alumno')
@section('content')

<form action="{{url('/alumnos')}}" method="post">
    @csrf
    <section class="mb-3">
        <label for="nombre" class="form-label" id="codigo">Nombre: </label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </section>
    <section class="mb-3">
        <label for="matricula" class="form-label" id="matricula">Matricula: </label>
        <input type="text" name="matricula" id="matricula" class="form-control">
    </section>
    <section class="mb-3">
    <label for="fecha_nacimiento" class="form-label" id="fecha_nacimiento">Fecha de Nacimiento: </label>
    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"   class="form-control">
    </section>
    <section class="mb-3">
    <label for="telefono" class="form-label" id="telefono">Telefono: </label>
    <input type="text" name="telefono" id="telefono" class="form-control">
    </section>
    <section class="mb-3">
    <label for="email" class="form-label" id="email">Email: </label>
    <input type="email" id="email" name="email" />
    </section>
    <button type="submit" class="btn btn-success">Guardar</button>

</form>
@endsection