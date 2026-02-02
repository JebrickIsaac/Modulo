<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header">Nuevo Producto</div>
    <div class="card-body">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            @include('productos.form')
            <button class="btn btn-success">Guardar</button>
        </form>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">
        Volver a productos
    </a>
    </div>
</div>
@endsection
