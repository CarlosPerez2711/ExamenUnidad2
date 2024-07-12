<!-- resources/views/alumnos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Ingreso</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
            @error('nombre')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" id="curso" name="curso" class="form-control" value="{{ old('curso') }}" required>
            @error('curso')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nota1">Nota 1</label>
            <input type="number" step="0.01" id="nota1" name="nota1" class="form-control" value="{{ old('nota1') }}" required>
            @error('nota1')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nota2">Nota 2</label>
            <input type="number" step="0.01" id="nota2" name="nota2" class="form-control" value="{{ old('nota2') }}" required>
            @error('nota2')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
