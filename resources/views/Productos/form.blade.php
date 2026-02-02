<div class="mb-3">
    <label>Nombre</label>
    <input name="nombre" class="form-control"
           value="{{ old('nombre', $producto->nombre ?? '') }}">
</div>

<div class="mb-3">
    <label>Precio</label>
    <input type="number" step="0.01" name="precio" class="form-control"
           value="{{ old('precio', $producto->precio ?? '') }}">
</div>

<div class="mb-3">
    <label>Categoría</label>
    <select name="categoria_id" class="form-select">
        <option value="">Seleccione</option>
        @foreach($categorias as $c)
            <option value="{{ $c->id }}"
                {{ (old('categoria_id', $producto->categoria_id ?? '') == $c->id) ? 'selected' : '' }}>
                {{ $c->nombre }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Proveedor</label>
    <select name="proveedor_id" class="form-select">
        <option value="">Seleccione</option>
        @foreach($proveedores as $p)
            <option value="{{ $p->id }}"
                {{ (old('proveedor_id', $producto->proveedor_id ?? '') == $p->id) ? 'selected' : '' }}>
                {{ $p->nombre }}
            </option>
        @endforeach
    </select>
</div>
