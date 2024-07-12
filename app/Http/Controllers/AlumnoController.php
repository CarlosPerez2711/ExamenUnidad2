<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumnoRequest;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        return view('alumnos.create');
    }

    public function store(AlumnoRequest $request)
    {
        $data = $request->validated();
        $data['promedio'] = ($data['nota1'] + $data['nota2']) / 2;
        $data['condicion'] = $data['promedio'] >= 11 ? 'Aprobado' : 'Desaprobado';

        Alumno::create($data);

        return redirect()->route('alumnos.create')->with('success', 'Los datos han sido guardados exitosamente');
    }

    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }
}
