@extends('layouts.plantilla')

@section('titulo', 'Clientes')


@section('contenido')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Clientes que realizaron compra
            </h2>
          
            <!-- With avatar -->

            <!--Modal-->
        
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">N</th>
                                <th class="px-4 py-3">Usuario</th>
                                <th class="px-4 py-3">Abrv. Productos Comprados</th>
                                <th class="px-4 py-3">Subtotal</th>
                                <th class="px-4 py-3">IGV</th>
                                <th class="px-4 py-3">Total</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @if (count($operaciones) <= 0)
                                <tr>
                                    <td class="px-4 py-3 text-sm"><b>NO HAY REGISTROS</b></td>
                                </tr>
                            @else
                                @foreach ($operaciones as $itemclientes)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3 text-sm">{{ $itemclientes->idoperacion}}</td>
                                        @foreach ($clientes as $itemC)
                                        @if ($itemC->idcliente == $itemclientes->idcliente)
                                          <td class="px-4 py-3 text-sm">{{ $itemC->nombrec}} {{ $itemC->apellidoc}}</td>
                                        @endif
                                      @endforeach
                                       
                                        <td >{{ $itemclientes->descripcion}}</td>
                                        <td class="px-4 py-3 text-sm">{{ $itemclientes->subtotal}}</td>
                                        <td class="px-4 py-3 text-sm">{{ $itemclientes->igv}}</td>
                                        <td class="px-4 py-3 text-sm">{{ $itemclientes->total}}</td>
                                     
                                        <td>

                                            <a href=""><button type="button"
                                                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button></a>
                                            <a href=""><button type="button"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                    <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <polyline points="3 6 5 6 21 6" />
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17" />
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17" />
                                                    </svg>
                                                </button></a>

                                        </td>


                                    </tr>
                                    <!--AQUI va endforeach-->
                                @endforeach
                            @endif


                        </tbody>
                    </table>
                </div>

            </div>


        </div>
        {{ $operaciones->links() }}
    </main>
@endsection
