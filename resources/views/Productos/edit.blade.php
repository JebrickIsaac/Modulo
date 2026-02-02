@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header">Editar Producto</div>
    <div class="card-body">
        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')
            @include('productos.form')
            <button class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
