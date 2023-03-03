<?php

namespace App\Http\Controllers;

use App\Models\GorrasTazasModel;
use App\Models\productosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        redirect()->back();
    }

    public function vistaProductos(){

        return view('Productos.viewProduct');
    }

    public function listarProductos( $producto){
        
        $arr = ['sudadera','playera','gorra','taza'];
        
        $valor = in_array($producto, $arr, true) ? true : false;

        if(!$valor){
            return redirect('/vistaProductos');
        }

        $table = $producto == 'taza' || $producto == 'gorra' ? 'gorrastazas' : 'productos';

        $info = DB::select("select *from $table where producto = :producto",['producto' => $producto]);

        return view('Productos.listaProductos',['info' => $info]);
    }
}
