@extends('layout/template')
@section('title','Alumnos')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
<h1>Lista de Alumnos</h1>
<table class="table table-sm table-hover table-striped table-bordered">
        <thead>
            <tr>
                <td hidden>id</td>
                <td>Matricula</td>
                <td>Nombre</td>
                <td>Fecha de Nacimiento</td>
                <td>Teléfono</td>
                <td>Email</td>
            </tr>

        </thead>
        <tbody>
            @foreach($lista AS $item)
            <tr>
                <td hidden>{{$item->id}}</td>
                <td>{{$item->matricula}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->fecha_nacimiento}}</td>
                <td>{{$item->telefono}}</td>
                <td>{{$item->email}}</td>
                <td>
                    <form action="{{url('/alumnos/'.$item->id)}}" method="get">
                        <input type="submit" class="btn btn-primary" value="ver">
                    </form> 
                </td> 

                <td>
                    <form action="{{url('/alumnos/'.$item->id.'/edit')}}" method="get">
                        <input type="submit" class="btn btn-secondary" value="editar">
                    </form> 
                </td>       
                <td>
                    <form action="{{url('/alumnos/'.$item->id)}}" method="post">
                    @method('DELETE')                   
                    @csrf
                        <input type="submit" class="btn btn-danger" value="eliminar">
                    </form> 
                </td>


            </tr>
            @endforeach
        </tbody>

    </table>


</body>
</html>
@endsection