<?php

namespace App\Http\Controllers;

use App\Models\Producto; 
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        // Obtener todos los productos de la base de datos
        $productos = Producto::all();
        
        return view('productos.index' , compact('productos'));
    }
}
