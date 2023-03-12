<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/EstiloInicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
</head>
<body class="hidden" onload="miFuncion();">
    

        <div class="centrado" id="cargado">
            <div class="lds-facebook">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        



        <nav id="MenuLateral">

            
            <ul id="ListaBar">

                <li id="Logo">
                    <img src="../img/LogoCine.jpg" alt="" width="40px" height="40px">
                </li>

            </ul>


            <ul id="rellenar">

                

                <a href="#" id="btnDash">
                    <li class="opciones">
                        <ul class="alinear">

                            <li><i class="fa-solid fa-house"></i></li>
                            <li class="Texto">Dashboard</li>

                        </ul>
                    </li>
                </a>

                <a href="#" id="btnPerfil">
                        <li class="opciones">
                            <ul class="alinear">
                                <li><img src="../img/Hamster.jpg" alt="" width="25px" height="25px"></li>
                                <li class="Texto">Perfil</li>

                            </ul>
                        </li>
                </a>

                <a href="#" id="btnGestion">
                    <li class="opciones">
                        <ul class="alinear">

                            
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                            <li class="Texto">Gestion</li>
                        </ul>
                    </li>
                </a>

                <a href="#" id="btnAjustes">
                    <li class="opciones">
                        <ul class="alinear">

                            
                            <li><i class="fa-solid fa-gear"></i></li>
                            <li class="Texto">Ajustes</li>
                        </ul>
                    </li>
                </a>

                <a href="#" id="btnBugs">
                    <li class="opciones">
                        <ul class="alinear">

                            
                            <li><i class="fa-solid fa-bug"></i></li>
                            <li class="Texto">Bugs</li>
                        </ul>
                    </li>
                </a>


                <a href="/index" id="btnSalir">
                    <li class="opciones">
                        <ul class="alinear">

                            
                            <li><i class="fa-solid fa-right-from-bracket"></i></li>
                            <li class="Texto">Salir</li>
                        </ul>
                    </li>
                </a>
 
                
                <a href="#" id="btnBugs">
                    <li class="opciones">
                        <ul class="alinear">

                            
                            <li id="luna"><i class="fa-solid fa-moon"></i></li>
                            <li class="Texto">Dark Mode</li>
                            <li>
                                <input type="checkbox" id="btn-switch" > 
                                <label for="btn-switch" class="lbl-switch"> 
                                </label>
                                

                                
                            </li>
                        </ul>
                    </li>
                </a>



                </div>


            </ul>

        </nav>

    <div id="Contenido" style="visibility:hidden;">

        <div id="Bienvenida">

            <p id="TxtBienvenida">Bienvenido Usuario Erick!</p>
            <p id="Saludo">Soy el sistema de Gestion de Cine DF y te ayudare a gestionar y analizar la informacion mas relevante</p> 


        </div>



        <div id="Gestion">

            <ul>
                <span>
                    <li>
                        <p>Gestionar Peliculas</p>
                    </li>
                </span>

         

      
                <button type="button" class="btn btn-danger btn-sm"  id="btnAñadir" data-bs-toggle="modal" data-bs-target="#ModalAñadir">
                    Añadir
                </button>

                <!--Modal Añadir--> 
                <div class="modal fade" id="ModalAñadir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <span><img src="../img/LogoCine.jpg" alt="" width="40px" height="40px" id="Logo2"></span>
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Pelicula</h1>
                          
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('pelicula') }}" method="post" enctype="multipart/form-data">

                                @csrf

                                <div class="mb-4" style='font-size: 13px;'>
                                    
                                    
                                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    name="Nombre">
                                    
                                </div>

                                <div class="mb-4" style='font-size: 13px;'>
                                  <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1 "
                                  name="Descripcion">
                                </div>

                                <div class="mb-4" style='font-size: 13px;'>
                                    <label for="exampleInputPassword1" class="form-label">Genero</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" 
                                    name="Genero">
                                </div>

                                <div class="mb-4" style='font-size: 13px;'>
                                    <label for="exampleInputPassword1" class="form-label">Pais</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" 
                                    name="Pais">
                                </div>

                                <div class="mb-4" style='font-size: 13px;'>
                                    <label for="exampleInputPassword1" class="form-label">Distribuidor</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" 
                                    name="Distribuidor">
                                </div>
                                
                                <div class="mb-4" style='font-size: 13px;'>
                                    <label for="exampleInputPassword1" class="form-label">Fecha Subida</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" 
                                    name="FechaSubida">
                                </div>     
                                
                                <div class="mb-4" style='font-size: 13px;'>
                                    <label for="exampleInputPassword1" class="form-label">Duracion</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" 
                                    name="Duracion">
                                </div>    

                                <div class="mb-4" style='font-size: 13px;'>
                                    <label for="exampleInputPassword1" class="form-label">Clasificacion</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" 
                                    name="Clasificacion">
                                </div>   
                                
                                <div class="mb-4 " style='font-size: 13px;'>
                                    <label for="exampleInputPassword1" class="form-label">Poster</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" 
                                    name="Poster">
                                </div>    
                                
                            
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>

                        </form>
                      </div>
                    </div>
                  </div>
                

                <div class="table-responsive ">
                    
                    <table class="table table-sm" style='font-size: 13px;' id="tablaPeliculas" >
                        <thead class="bg-danger">
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Pais</th>
                            <th scope="col">Distribuidor</th>
                            <th scope="col">Fecha Subida</th>
                            <th scope="col">Duracion</th>
                            <th scope="col">Clasificacion</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider" >
                            @foreach($datos as $campo)
                                <tr >
                                    <td>{{$campo->Nombre}}</td>
                                    <td>{{$campo->Descripcion}}</td>
                                    <td>{{$campo->Genero}}</td>
                                    <td>{{$campo->Pais}}</td>
                                    <td>{{$campo->Distribuidor}}</td>
                                    <td>{{$campo->FechaSubida}}</td>
                                    <td>{{$campo->Duracion}} min</td>
                                    <td>{{$campo->Clasificacion}}</td>
                                    <td>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#ModalEditar" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    </td>

                                    <!--Modal de modificar pelicula-->
                                    <div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                        <div class="modal-dialog">
                                          <div class="modal-content" id="ModalModificar" >
                                            <div class="modal-header">
                                                <span><img src="../img/LogoCine.jpg" alt="" width="40px" height="40px" id="Logo2"></span>
                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Pelicula</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnCerrar"></button>
                                            </div>
                                            <div class="modal-body">
                                              
                                                <form>

                                                    <div class="mb-4" style='font-size: 13px;'>
                                                        
                                                        
                                                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        name="Nombre">
                                                        
                                                    </div>

                                                    <div class="mb-4" style='font-size: 13px;'>
                                                      <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                                                      <input type="text" class="form-control" id="exampleInputPassword1 "
                                                      name="Descripcion">
                                                    </div>

                                                    <div class="mb-4" style='font-size: 13px;'>
                                                        <label for="exampleInputPassword1" class="form-label">Genero</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" 
                                                        name="Genero">
                                                    </div>

                                                    <div class="mb-4" style='font-size: 13px;'>
                                                        <label for="exampleInputPassword1" class="form-label">Pais</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" 
                                                        name="Pais">
                                                    </div>

                                                    <div class="mb-4" style='font-size: 13px;'>
                                                        <label for="exampleInputPassword1" class="form-label">Distribuidor</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" 
                                                        name="Distribuidor">
                                                    </div>
                                                    
                                                    <div class="mb-4" style='font-size: 13px;'>
                                                        <label for="exampleInputPassword1" class="form-label">Fecha Subida</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" 
                                                        name="Fecha Subida">
                                                    </div>     
                                                    
                                                    <div class="mb-4" style='font-size: 13px;'>
                                                        <label for="exampleInputPassword1" class="form-label">Duracion</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" 
                                                        name="Duracion">
                                                    </div>    

                                                    <div class="mb-4" style='font-size: 13px;'>
                                                        <label for="exampleInputPassword1" class="form-label">Clasificacion</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" 
                                                        name="Clasificacion">
                                                    </div>   
                                                    
                                                    <div class="mb-4 " style='font-size: 13px;'>
                                                        <label for="exampleInputPassword1" class="form-label">Poster</label>
                                                        <input type="file" class="form-control" id="exampleInputPassword1" 
                                                        name="Clasificacion">
                                                    </div>    
                                                    
                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                              <button type="button" class="btn btn-success">Guardar cambios</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="modal-dialog modal-lg">
                                
                                    </div>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            
                


            </ul>


        </div>


        
        <div id="Ajustes">

            <p>Ajustes</p>


        </div>

        <div id="Bugs">

            <p>Bugs</p>


        </div>

        




    </div>





    



    <script src="../js/jsInicio.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/05dc881a1f.js" crossorigin="anonymous"></script>
</body>
</html>