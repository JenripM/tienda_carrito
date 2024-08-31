<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Operacion;
use App\Models\Producto;
use Illuminate\Http\Request;

class ReporteController extends Controller
{

    public function index(){
        return view('reportes.index');
    }
    public function graficar(){
        $clientes = Cliente::select(Cliente::raw('sexo as sexo, count(*) as cantidad'))->groupBy('sexo')->get();
        
        $puntos=[];
        foreach($clientes as $clien){
            $puntos[] = ['name'=>$clien['sexo'],'y'=>floatval($clien['cantidad'])];
        }
        return view('operaciones.graficos', ["data" => json_encode($puntos)]);
    }
    
 
    public function  clie()
    {
      
        $clientes = Cliente::where('estado', '=', 1)->get();
        // dd($categories);
        return view('reportes.clientes', compact('clientes'));
    }


    public function  prod()
    {
        $productos = Producto::where('estado', '=', 1)->get();
        // dd($categories);
        return view('reportes.productos', compact('productos'));
    }

    public function  oper()
    {  
        $operaciones=Operacion::where('estado', '=', 1)->get();
        $clientes = Cliente::all();
   
        return view('reportes.operar', compact('clientes','operaciones'));
    }
}
