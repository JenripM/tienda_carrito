<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    const PAGINATION=10;
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $productos = Producto::where('estado', '=', 1)->where('descripcion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        // dd($categories);
        return view('productos.index', compact('productos','buscarpor'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'descripcion' => 'required|alpha|max:60',
            ],
            [
                'descripcion.required' => 'Ingrese Decripcion de Categoria',
                'descripcion.max' => 'Maximo 60 caracteres para la descripcion',
            ]
        );
        $productos=new Producto();
        $productos->nombrep=$request->nombrep;
        $productos->abreviatura=$request->abreviatura;
        $productos->descripcion=$request->descripcion;
        $productos->cantidad=$request->cantidad;
        $productos->precio=$request->precio;
        $productos->ruta=$request->ruta;
        $productos->estado='1';
        $productos->save();
        return redirect()->route('productos.index');
    }

    public function edit($id)
    {
        $productos=Producto::findOrFail($id);
        return view('productos.edit',compact('productos'));
    }
    
    public function update(Request $request, $id)
    {
        $data = request()->validate(
            [

                'descripcion' => 'required|alpha|max:60',
            ],
            [
                'descripcion.unique' => 'Hay nombre repetido',
                'descripcion.required' => 'Ingrese Decripcion del Producto',
                'descripcion.max' => 'Maximo 60 caracteres para la descripcion',
            ]
        );
        $productos=Producto::findOrFail($id);
        $productos->nombrep=$request->nombrep;
        $productos->abreviatura=$request->abreviatura;
        $productos->descripcion=$request->descripcion;
        $productos->cantidad=$request->cantidad;
        $productos->precio=$request->precio;
        $productos->ruta=$request->ruta;
        $productos->estado='1';
        $productos->save();
        return redirect()->route('productos.index');
    }
    public function destroy($id)
    {
        $productos=Producto::findOrFail($id);
        $productos->estado='0';
        $productos->save();
        return redirect()->route('productos.index')->with('datos','Registros Eliminado..!');
    }

    public function confirmar($id){
        $productos=Producto::findOrFail($id);
        return view('productos.confirmar',compact('productos'));
    }

}
