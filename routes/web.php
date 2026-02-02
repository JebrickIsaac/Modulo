<?php

use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return redirect()->route('productos.index');
});


Route::resource('productos', ProductoController::class);

