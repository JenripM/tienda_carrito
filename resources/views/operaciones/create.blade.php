<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('carrito/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carrito/css/estilo.css') }}">
    <script src="{{ asset('carrito/js/popper.min.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('carrito/css/sweetalert2.min.css') }}">

    <title>Carrito Compras en JavaScript</title>

</head>

<body>
    <header>
        <div class="container">
            <div class="row justify-content-between mb-5">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="index.html">MOTOFIX</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>
    </header>

    <br>

    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h2 class="d-flex justify-content-center mb-3">Realizar Compra</h2>
                    <form  action="{{ route('operaciones.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="cliente" class="col-12 col-md-2 col-form-label h2">Cliente :</label>
                            <select id="underline_select" style="border-radius: 5px" name="idcliente"  
                                class="col-12 col-md-10 form-control @error('idcliente') is-invalid @enderror" required>
                                <option selected disabled>Seleccione Cliente</option>
                                @foreach ($clientes as $item)
                                    <option value="{{ $item->idcliente }}"> {{ $item->nombrec }} {{ $item->apellidoc }}
                                    </option>
                                @endforeach
                            </select>
                            @error('idcliente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div id="carrito" class="form-group table-responsive ">
                            <table class="table" id="lista-compra">
                                <thead>
                                    <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Sub Total</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>

                                </thead>
                                <tbody>

                                </tbody>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">SUB TOTAL :</th>
                                    <th scope="col">
                                        <p id="subtotal"></p>
                                    </th>
                                    <input type="hidden" id="valorSub" name="subtotal">

                                    <!-- <th scope="col"></th> -->
                                </tr>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">IGV :</th>
                                    <th scope="col">
                                        <p id="igv"></p>
                                    </th>
                                    <input type="hidden" id="valorIGV" name="igv">
                                    <input type="hidden" id="nombres" name="descripcion">

                                    <!-- <th scope="col"></th> -->
                                </tr>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">TOTAL :</th>
                                    <th scope="col">
                                        <input id="total" name="total" class="font-weight-bold border-0" readonly
                                            style="background-color: white;"></input>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>

                            </table>
                        </div>

                        <div class="row justify-content-center" id="loaders">
                            <img id="cargando" src="img/cargando.gif" width="220">
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-xs-12 col-md-4">

                                <a href="{{ route('cancelar.operaciones') }}" class="btn btn-info btn-block">
                                    Seguir Comprando Compra</a>

                            </div>

                            <div class="col-xs-12 col-md-4">
                                <button href="#" class="btn btn-success btn-block" id="procesar-compra">Realizar
                                    compra</button>
                            </div>
                        </div>
                    </form>


                </div>


            </div>

        </div>
    </main>





    </div>

    <script src="{{ asset('carrito/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('carrito/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('carrito/js/sweetalert2.min.js') }}"></script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>

    <script src="{{ asset('prueba.js') }}"></script>
    <script src="{{ asset('compra.js') }}"></script>

</body>

</html>
