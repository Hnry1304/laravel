<?php

namespace App\Http\Controllers;

use App\Models\GorrasTazasModel;
use App\Models\productosModel;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){

        return view('Productos.agregar');
    }

    public function datos(Request $request){
        
        $validatedProducto = $request->validate([
            'producto' => 'required',
        ]);
        $producto = $request->input('producto');
        $resp = FALSE;

        if($producto == 'sudadera' || $producto == 'playera'){
            $info = [
                'talla' => 'required',
                'color' => 'required',
                'genero' => 'required',
                'precio' => 'required',
                'cantidad' => 'required',
            ];
            $resp = TRUE;

        }else{
            $info = [
                'precio' => 'required',
                'cantidad' => 'required',
            ];
        }

        $validated = $request->validate($info);

        if($resp){
            $productos = new productosModel();
            $productos->producto = $request->producto;
            $productos->talla = $request->talla;
            $productos->color = $request->color;
            $productos->genero = $request->genero;
            $productos->precio = $request->precio;
            $productos->cantidadDisponible = $request->cantidad;
            $productos->save();
        }else{
            $gorrasTazas = new GorrasTazasModel();
            $gorrasTazas->precio = $request->precio;
            $gorrasTazas->cantidadDisponible = $request->cantidad;
            $gorrasTazas->save();
        }
    }
}
