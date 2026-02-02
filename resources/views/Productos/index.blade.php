
@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header d-flex justify-content-between">
        <h5>Productos</h5>
        <a href="{{ route('productos.create') }}" class="btn btn-success">Nuevo</a>
    </div>

    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Proveedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $p)
                <tr>
                    <td>{{ $p->nombre }}</td>
                    <td>${{ $p->precio }}</td>
                    <td>{{ $p->categoria->nombre }}</td>
                    <td>{{ $p->proveedor->nombre }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('productos.edit',$p) }}">Editar</a>
                        <form method="POST" action="{{ route('productos.destroy',$p) }}" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
