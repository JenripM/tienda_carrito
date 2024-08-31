<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    const PAGINATION=10;
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $clientes = Cliente::where('estado', '=', 1)->where('apellidoc','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        // dd($categories);
        return view('clientes.index', compact('clientes','buscarpor'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate(
            [
        
            ],
            [
           
            ]
        );
        $clientes=new Cliente();
        $clientes->nombrec=$request->nombrec;
        $clientes->apellidoc=$request->apellidoc;
        $clientes->dni=$request->dni;
        $clientes->celular=$request->celular;
        $clientes->direccion=$request->direccion;
        $clientes->sexo=$request->sexo;
        $clientes->estado='1';
        $clientes->save();
        return redirect()->route('clientes.index');
    }

    public function edit($id)
    {
        $clientes=Cliente::findOrFail($id);
        return view('clientes.edit',compact('clientes'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate(
            [
            ],
            [
               
            ]
        );
        $clientes=Cliente::findOrFail($id);
        $clientes->nombrec=$request->nombrec;
        $clientes->apellidoc=$request->apellidoc;
        $clientes->dni=$request->dni;
        $clientes->celular=$request->celular;
        $clientes->direccion=$request->direccion;
        $clientes->sexo=$request->sexo;
        $clientes->estado='1';
        $clientes->save();
        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $clientes=Cliente::findOrFail($id);
        $clientes->estado='0';
        $clientes->save();
        return redirect()->route('clientes.index')->with('datos','Registros Eliminado..!');
    }

    public function confirmar($id){
        $clientes=Cliente::findOrFail($id);
        return view('clientes.confirmar',compact('clientes'));
    }
}
