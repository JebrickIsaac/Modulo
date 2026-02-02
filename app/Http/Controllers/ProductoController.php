<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {
        $productos = Producto::with(['categoria','proveedor'])->get();
        return view('productos.index', compact('productos'));
    }

    public function create() {
        return view('productos.create', [
            'categorias' => Categoria::all(),
            'proveedores' => Proveedor::all()
        ]);
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric|min:0.01',
        'categoria_id' => 'required',
        'proveedor_id' => 'required',
    ]);

    Producto::create($request->all());

    return redirect()->route('productos.index')
                     ->with('success', 'Producto creado correctamente');
}


    public function edit(Producto $producto) {
        return view('productos.edit', [
            'producto' => $producto,
            'categorias' => Categoria::all(),
            'proveedores' => Proveedor::all()
        ]);
    }

    public function update(Request $request, Producto $producto) {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric|min:0.01',
            'categoria_id' => 'required',
            'proveedor_id' => 'required'
        ]);

        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success','Producto actualizado');
    }

    public function destroy(Producto $producto) {
        $producto->delete();
        return redirect()->route('productos.index')->with('success','Producto eliminado');
    }
}

