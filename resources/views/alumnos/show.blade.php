<!-- resources/views/alumnos/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $alumno->nombre }}</h1>
    <p>Curso: {{ $alumno->curso }}</p>
    <p>Nota 1: {{ $alumno->nota1 }}</p>
    <p>Nota 2: {{ $alumno->nota2 }}</p>
    <p>Promedio: {{ $alumno->promedio }}</p>
    <p>Condición: {{ $alumno->condicion }}</p>
    <p>Fecha de Registro: {{ $alumno->created_at->format('d-m-Y') }}</p>
@endsection
