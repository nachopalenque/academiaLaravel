<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $alumnos= Alumno::all();
        return view('alumno.index',['lista' => $alumnos]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre = $request->input('nombre');
        $alumno->matricula = $request->input('matricula');
        $alumno->fecha_nacimiento = $request->input('fecha_nacimiento');
        $alumno->email = $request->input('email');
        $alumno->telefono = $request->input('telefono');

      
        $alumno->save();
        return redirect('alumnos');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);
        return view('alumno.show',['id'=>$id, 'alumno'=>$alumno]);    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        return view('alumno.edit',['id'=>$id, 'alumno'=>$alumno]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);
        $alumno -> nombre = $request->input('nombre');
        $alumno -> matricula = $request->input('matricula');
        $alumno -> fecha_nacimiento = $request->input('fecha_nacimiento');
        $alumno -> telefono = $request->input('telefono');
        $alumno -> email = $request->input('email');
        $alumno->save();
        return redirect('alumnos');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect('alumnos');
    }
}
