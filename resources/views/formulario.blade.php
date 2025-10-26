@extends('master')

@section('pestaña')
<title>Formulario de Contacto</title>
@endsection

@section('titulo')
<h1>Formulario de Contacto</h1>
@endsection

@section('contenido')
<div class="mb-4 content-card">
    <h2>Contáctanos</h2>
    <form action="{{ url('/guardarOpinion') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection