@extends('master')

@section('pestaña')
<title>Página Principal</title>
@endsection

@section('titulo')
<h1>Bienvenido a Altata</h1>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-8">
        <div class="mb-4 p-3 content-card rounded">
            <h2>Altata</h2>
            <p>¡Bienvenido a Altata, un paraíso costero en el municipio de Navolato, cerca de Culiacán, Sinaloa! Conocido por sus hermosas playas, lagunas y mariscos frescos.</p>
            <img src="https://revistaespejo.com/wp-content/uploads/2024/11/Altata-Malecon-puestos-2024-24.jpg" 
                 alt="Altata" class="img-fluid rounded" style="max-width: 200px;" />
        </div>
    </div>
    <div class="col-lg-4">
        <div class="p-3 sidebar rounded" style="height: 700px;">
            <p>Altata es un pueblo pesquero encantador en Sinaloa, México, famoso por su tranquilidad y bellezas naturales. Ubicado a unos 30 km de Culiacán, ofrece playas vírgenes como la de Altata y la Isla del Pacífico. La economía se basa en la pesca y el turismo, con festivales como el de la Virgen del Mar. Disfruta de paseos en lancha por la laguna, donde puedes observar delfines y garzas. ¡Ven y descubre el sabor del mar sinaloense!</p>
        </div>
    </div>
</div>
@endsection
