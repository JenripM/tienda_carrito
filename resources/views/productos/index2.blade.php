<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Tutorial DataTables</title>
      
    <!-- Bootstrap CSS -->
   
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="tabla/main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="tabla/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="tabla/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  </head>
    
  <body> 
     <header>
         <h1 class="text-center text-light">DATATABLES</h1>
         <h2 class="text-center text-light">Cómo <span class="badge badge-warning">Personalizar</span></h2> 
     </header>    
    <div style="height:50px"></div>
     
    <!--Ejemplo tabla con DataTables-->
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
                                        <th class="px-4 py-3">Descripcion</th>
                                        <th class="px-4 py-3">Precio</th>
                                        <th class="px-4 py-3">Imagen</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    @if (count($productos) <= 0)
                                        <tr>
                                            <td class="px-4 py-3 text-sm"><b>NO HAY REGISTROS</b></td>
                                        </tr>
                                    @else
                                        @foreach ($productos as $itemproductos)
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="px-4 py-3 text-sm">{{ $itemproductos->idproducto }}</td>
                                                <td class="px-4 py-3 text-sm">{{ $itemproductos->nombrep }}</td>
                                                <td class="px-4 py-3 text-sm">{{ $itemproductos->descripcion }}</td>
                                                <td class="px-4 py-3 text-sm">S/. {{ $itemproductos->precio}}</td>
                                                <td class="px-4 py-3 text-sm"><img  style="width: 150px" src="produccion/{{ $itemproductos->ruta}}" alt=""></td>
                                                <td>
        
                                                    <a href="{{ route('productos.edit', $itemproductos->idproducto) }}"><button
                                                            type="button"
                                                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                            <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </button></a>
                                                    <a href="{{ route('productos.confirmar', $itemproductos->idproducto) }}"><button
                                                            type="button"
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
    </div>    
     
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="tabla/jquery/jquery-3.3.1.min.js"></script>
    <script src="tabla/popper/popper.min.js"></script>
    <script src="tabla/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="tabla/datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="tabla/datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="tabla/datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="tabla/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="tabla/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="tabla/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="tabla/main.js"></script>  
    
    
  </body>
</html>
