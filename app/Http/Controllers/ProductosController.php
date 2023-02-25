<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){

        return view('Productos.agregar');
    }

    public function datos(Request $request){
        $producto = $request->input('producto');

        if($producto == 'sudadera' || $producto == 'playera'){
            $info = [
                'talla' => 'required',
                'color' => 'required',
                'genero' => 'required',
                'precio' => 'required',
                'cantidad' => 'required',
            ];
        }else{
            $info = [
                'precio' => 'required',
                'cantidad' => 'required',
            ];
        }

        $validated = $request->validate($info);
            
    }
}
