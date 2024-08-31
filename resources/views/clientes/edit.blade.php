@extends('layouts.plantilla')

@section('titulo', 'Editar Clientes')

@section('contenido')
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>


    <div class="container">

        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1"
            class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex"
            aria-modal="true" role="dialog">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    
                    <div class="py-5 px-5 lg:px-7">
                        
                        <form class="space-y-6" method="POST" action="{{ route('clientes.update', $clientes->idcliente) }}">
                            @method('put')
                            @csrf
                            <div>
                                <label for="nombrep"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre del
                                    Cliente</label>
                                <input type="text" name="nombrec" id="nombrec"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    value="{{ $clientes->nombrec }}" >
                            </div>
                            <div>
                                <label for="apellidos"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apellidos del cliente</label>
                                <input type="text" name="apellidoc" id="apellidoc"
                                    value="{{ $clientes->apellidoc }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    >
                            </div>
                            <div>
                                <label for="descripcion"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">DNI del
                                    Cliente</label>
                                <input type="text" name="dni" id="dni" value="{{$clientes->dni}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    >
                            </div>
                            <div>
                                <label for="descripcion"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Celular del
                                    Cliente</label>
                                <input type="text" name="celular" id="celular" value="{{$clientes->celular}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    >
                            </div>
                            <div>
                                <label for="descripcion"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Direccion del
                                    Cliente</label>
                                <input type="text" name="direccion" id="direccion" value="{{$clientes->direccion}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    >
                            </div>
                            <div>
                                <select name="sexo" id="sexo"  
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                    <option  value="{{$clientes->sexo}}">Seleccionar el sexo</option>
                                    <option value="M">MASCULINO</option>
                                    <option value="F">FEMENINO</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">EDITAR</button>
                            <a href="{{ route('cancelar') }}">
                                <button type="button"
                                    class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">CANCELAR</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
