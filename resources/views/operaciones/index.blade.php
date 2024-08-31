@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="carrito/css/sweetalert2.min.css">
    <div>
        <br>
        <div class="container">


            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top ">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <button style="float: auto" id="dropdownMenuIconHorizontalButton" class="navbar-toggler" type="button"
                        data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                        aria-expanded="false" aria-label="Toggle navigation" data-dropdown-toggle="dropdownDotsHorizontal"
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        type="button">
                        <i class='fas fa-cart-plus' style='font-size:24px'></i>
                        <h2>Carrito</h2></span>
                    </button>


                    <div id="dropdownDotsHorizontal"
                        class="hidden z-50 w-80 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                        class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto" class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownMenuIconHorizontalButton">
                            <li class="nav-item dropdown">


                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table w-full whitespace-no-wrap">
                                        <thead>
                                            <tr
                                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                <th class="px-4 py-3">Imagen</th>
                                                <th class="px-4 py-3">Abrev.</th>
                                                <th class="px-4 py-3">Precio</th>
                                                <th class="px-4 py-3"></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                    <br>
                                    <a href="#" id="vaciar-carrito" style="float: left"
                                        class="btn btn-block btn-primary text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vaciar</a>
                                    <a href="#" id="procesar-pedido" style="float: right"
                                        class="btn btn-block btn-primary text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Comprar</a>


                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>



                </nav>
            </div>
        </div>
    </div>

    <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Listado De Productos
            </h4>
        </div>

        <div class="container" id="lista-productos">

            <div class="grid  gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                @if (count($productos) <= 0)
                    <h2 class="px-4 py-3 text-sm"><b>NO HAY REGISTROS</b></h2>
                @else
                    @foreach ($productos as $itemproductos)
                        <div
                            class="card-deck mb-3 text-center w-full max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <div class="card mb-4 shadow-sm">

                                <div class="card-body">
                                    <img src="produccion/{{ $itemproductos->ruta }}" class="card-img-top">
                                    <div class="card-header">
                                        <h4 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            {{ $itemproductos->abreviatura }}</h4><h6 style="color: transparent"> {{$itemproductos->cantidad}}</h6>
                                        <p>{{ $itemproductos->nombrep}}</p>
                                    </div>
                                    <h1 class=" card-title pricing-card-title precio">S/. <span
                                            class="">{{ $itemproductos->precio }}</span>
                                    </h1>

                                    <br>
                                    <a href=""
                                        class="btn btn-block btn-primary agregar-carrito text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        data-id="{{ $itemproductos->idproducto }}">Agregar</a>
                                </div>
                            </div>

                        </div>
                    @endforeach

                @endif
            </div>






        </div>
    </main>
    {{ $productos->links() }}
    <br>


    <script src="carrito/js/sweetalert2.min.js"></script>
 


    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

    <script src="{{asset('prueba.js')}}"></script>
    <script src="{{asset('ped.js')}}"></script>
@endsection
