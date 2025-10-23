@extends('layouts.master')

@section('pestaña')
<title>Editar Alumno</title>
@endsection

@section('titulo')
<h1>Editar Alumno</h1>
@endsection

@section('contenido')
<form action="{{ url('/actualizarAlumno/' . $alumno->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Campos del formulario -->
    <input type="text" name="nombre" value="{{ $alumno->nombre }}" required>
    <button type="submit">Actualizar</button>
</form>
@endsection