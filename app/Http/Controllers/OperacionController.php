<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Operacion;
use App\Models\Producto;
use Illuminate\Http\Request;

class OperacionController extends Controller
{
    const PAGINATION=8;
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $productos = Producto::where('estado', '=', 1)->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
      
        //$productos = Producto::all();
        return view('operaciones.index', compact('productos'));
    }
    
    public function create(){
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('operaciones.create', compact('clientes','productos'));
    }

    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'idcliente' => 'required',
            ],
            [
                'idcliente.required' => 'Seleccione cliente',
            ]
        );
        $operaciones=new Operacion();
        $operaciones->descripcion=$request->descripcion;
        $operaciones->subtotal=$request->subtotal;
        $operaciones->igv=$request->igv;
        $operaciones->total=$request->total;
        $operaciones->idcliente=$request->idcliente;
        $operaciones->estado='1';
        $operaciones->save();
        return redirect()->route('operaciones.reporte');

        
    }
    
    const PAGINAT=10;
    public function reporte(Request $request){
        $buscarpor = $request->get('buscarpor');
        $operaciones = Operacion::where('estado', '=', 1)->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINAT);
        $clientes = Cliente::all();
        return view('operaciones.reporte',compact('operaciones','clientes','buscarpor'));
    }
    
}
