@extends('layouts.plantilla')

@section('titulo', 'Productos')

@section('contenido')
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

    
    <div class="container">
        
  
  <!-- Main modal -->
  <div id="authentication-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
      <div class="relative p-4 w-full max-w-md h-full md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <div class="">    
                  <form class="space-y-6"  method="POST" action="{{route('productos.update',$productos->idproducto)}}">
                    @method('put')
                    @csrf
                      <div>
                          <label for="nombrep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre del Producto</label>
                          <input type="text" name="nombrep" id="nombrep" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$productos->nombrep}}" required="">
                      </div>
                      <div>
                        <label for="abreviatura" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cantidad del Producto</label>
                        <input type="text" name="cantidad" id="cantidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$productos->cantidad}}" required="">
                    </div>
                      <div>
                        <label for="abreviatura" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Abreviatura del Producto</label>
                        <input type="text" name="abreviatura" id="abreviatura" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$productos->abreviatura}}" required="">
                    </div>
                    <div>
                        <label for="precio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Precio del Producto</label>
                        <input type="text" name="precio" id="precio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$productos->precio}}" required="">
                    </div>
                      <div>
                          <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descripcion del Producto</label>
                          <input type="text" name="descripcion" id="descripcion" value="{{$productos->descripcion}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                      </div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                      for="multiple_files">Subir imagen del producto</label>
                  <input
                      class="block w-full text-sm text-gray-900 bg-blue-50 rounded-lg border border-blue-300 cursor-pointer blue:text-gray-400 focus:outline-none dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400"
                      id="ruta"  name="ruta" type="file" multiple="" value="public/produccion/{{ $productos->ruta}}">

                      <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">EDITAR</button>
                        <a href="{{ route('cancelar.productos') }}">
                            <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">CANCELAR</button>
                        </a>
                  </form>
              </div>
          </div>
      </div>
  </div> 
  
    </div>


@endsection
