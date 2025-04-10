@extends('layout')

@section('content')
    <h1>Detalles del Producto</h1>

    <div class="mb-3">
        <strong>Nombre:</strong>
        <p>{{ $producto->nombre }}</p>
    </div>
    <div class="mb-3">
        <strong>Descripción:</strong>
        <p>{{ $producto->descripcion }}</p>
    </div>
    <div class="mb-3">
        <strong>Precio:</strong>
        <p>${{ $producto->precio }}</p>
    </div>

    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
@endsection
