@extends('layouts.plantilla')

@section('titulo', 'Reporte de Clientes')

@section('contenido')


<link rel="stylesheet" href="{{asset('tabl.css')}}">  
      
<link rel="stylesheet" href="{{asset('tabla/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('tabla/datatables/datatables.min.css')}}"/>
<!--datables estilo bootstrap 4 CSS-->  
<link rel="stylesheet"  type="text/css" href="{{asset('tabla/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css')}}">
       
<!--font awesome con CDN-->  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
  

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />


    <div class="container grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Reporte De Clientes 
        </h2>
        <!-- CTA -->
               <!-- With avatar -->

               <nav class="navbar float-right">
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    Generar Reporte
                </h4>
            </nav>

        <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">        
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                               
                                    <thead>
                                        <tr
                                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                            <th class="px-4 py-3">N</th>
                                            <th class="px-4 py-3">Nombre</th>
                                            <th class="px-4 py-3">Apellidos</th>
                                            <th class="px-4 py-3">DNI</th>
                                            <th class="px-4 py-3">Celular</th>
                                            <th class="px-4 py-3">Direccion</th>
                                            <th class="px-4 py-3">Sexo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                        @if (count($clientes) <= 0)
                                            <tr>
                                                <td class="px-4 py-3 text-sm"><b>NO HAY REGISTROS</b></td>
                                            </tr>
                                        @else
                                            @foreach ($clientes as $itemproductos)
                                                <tr class="text-gray-700 dark:text-gray-400">
                                                    <td class="px-4 py-3 text-sm">{{ $itemproductos->idcliente }}</td>
                                                    <td class="px-4 py-3 text-sm">{{ $itemproductos->nombrec }}</td>
                                                    <td class="px-4 py-3 text-sm">{{ $itemproductos->apellidoc }}</td>
                                                    <td class="px-4 py-3 text-sm">{{ $itemproductos->dni}}</td>
                                                    <td class="px-4 py-3 text-sm">{{ $itemproductos->celular}}</td>
                                                    <td class="px-4 py-3 text-sm">{{ $itemproductos->direccion}}</td>
                                                    <td class="px-4 py-3 text-sm">{{ $itemproductos->sexo}}</td>
                                                </tr>
                                                <!--AQUI va endforeach-->
                                            @endforeach
                                        @endif
            
            
                                    </tbody>
                               
                                
    
                           </table>                  
                        </div>
                    </div>
            </div>  
        </div>    
         

 
    </div>

    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>


    <script src="{{asset('tabla/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('tabla/popper/popper.min.js')}}"></script>
    <script src="{{asset('tabla/bootstrap/js/bootstrap.min.js')}}"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="{{asset('tabla/datatables/datatables.min.js')}}"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="{{asset('tabla/datatables/Buttons-1.5.6/js/dataTables.buttons.min.js')}}"></script>  
    <script src="{{asset('tabla/datatables/JSZip-2.5.0/jszip.min.js')}}"></script>    
    <script src="{{asset('tabla/datatables/pdfmake-0.1.36/pdfmake.min.js')}}"></script>    
    <script src="{{asset('tabla/datatables/pdfmake-0.1.36/vfs_fonts.js')}}"></script>
    <script src="{{asset('tabla/datatables/Buttons-1.5.6/js/buttons.html5.min.js')}}"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="{{asset('tabla/ta.js')}}"></script>  
@endsection
