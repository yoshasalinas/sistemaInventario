<?php

include('conexion_db.php');

session_start();

if(!isset($_SESSION['id'])){
    header("Location: index.php");
}

$nombre = $_SESSION['nombreUsuario'];
$tipo_usuario = $_SESSION['rol'];

$select = "SELECT * FROM usuarios";
$usuario = mysqli_query($conexion, $select);



?>


<!Doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!---->
        <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--CSS-->
        <link href="css/inicio-style.css" rel="stylesheet" type="text/css">
        <link href="css/usuarios-styles.css" rel="stylesheet" type="text/css">
        <!--icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <!--  Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
        <!--  extension responsive  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        
        
        <title>Usuarios</title>
        
    </head>


    <body>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <div class="div">
                    <!--Boton de menu-->
                    <i class="fas fa-align-justify fa-2x" id="sidebarCollapse"></i> <span></span>
                    <!--Titulo-->
                    <a class="navbar-brand" href="">
                        <h2 id="logo">Control de Inventario</h2>
                    </a>
                </div>
                <div class="div">
                    <img src="img/itcj-escudo-rojo.png"  class="" alt="">
                    <img src="img/logo-TNM.png"  class="" alt="">
                </div>
                <div class="div">
                    <!--Boton navbar submenu-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--Navbarssubmenu-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li><a href="logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="wrapper fixed-left">
            <!--Menu sidebar-->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <i class="fas fa-user"></i>
                    <h1><?php echo $nombre ?></h1>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="inicio.php">
                            <i class="fas fa-home fa-lg"></i>
                            Inicio
                        </a>
                    </li>
                    <li class="">
                        <a href="#movimientosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fas fa-clipboard fa-lg"></i>
                            Movimientos
                        </a>
                        <ul class="collapse list-unstyled" id="movimientosSubmenu">
                            <li>
                                <a href="cambioUbicacion.php">
                                    <i class="fas fa-thumbtack"></i>
                                    Cambio de Ubicacion
                                </a>
                            </li>
                            <li>
                                <a href="prestamo.php">
                                    <i class="fas fa-people-carry"></i>
                                    Prestamo
                                </a>
                            </li>
                            <li>
                                <a href="bajas.php">
                                    <i class="fas fa-trash-alt"></i>
                                    Bajas
                                </a>
                            </li>
                        </ul> 
                    </li>
                    
                    <li>
                        <a href="#registroSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fas fa-plus fa-lg"></i>
                            Nuevo Registro</a>
                        <ul class="collapse list-unstyled" id="registroSubmenu">
                            <li>
                                <a href="registroEquipo.php">
                                    <i class="fas fa-desktop"></i>
                                    Equipo
                                </a>
                            </li>
                            <li>
                                <a href="registroMobiliario.php">
                                    <i class="fas fa-couch"></i>
                                    Mobiliario
                                </a>
                            </li>
                            <li>
                                <a href="registroRefacciones.php">
                                    <i class="fas fa-microchip"></i>
                                    Refacciones
                                </a>
                            </li>
                        </ul> 
                    </li>
                    <li>
                        <a href="inventario.php">
                            <i class="fas fa-box-open fa-lg"></i>
                            Inventario
                        </a>
                    </li>
                    <li>
                        <a href="ubicaciones.php">
                            <i class="fas fa-map-marked-alt fa-lg"></i>
                            Ubicaciones
                        </a>
                    </li>
                    <li>
                        <a href="reportes.php">
                            <i class="fas fa-info-circle"></i>
                            Reportes
                        </a>
                    </li>
                    <li>
                        <a href="#configuracionesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fas fa-cog"></i>
                            Configuraciones
                        </a>
                        <ul class="collapse list-unstyled" id="configuracionesSubmenu">
                            <li>
                                <a href="usuarios.php">
                                    <i class="fas fa-users"></i>
                                    Usuarios</a>
                            </li>
                            <li>
                                <a href="configuracionUbicaciones.php">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Ubicaciones
                                </a>
                            </li>
                        </ul> 
                    </li>
                </ul>
            </nav>
            <!--Contenido principal-->
            <div id="content" class="container tarjeta"> 
                <div class="container">
                    <!---->
                    <div class="row " >
                        <div class="col-lg-12">
                            <H1>Usuarios del sistema</H1>
                            <div id="ok" class="alert alert-success ocultar" role="alert">
                                Registro exitoso!
                            </div>
                        </div>
                    </div>
                    <div class="row btn-nuevoUsuario" >
                        <div class="col-lg-12">
                            <button  type="submit" class="btn btn-nuevoUsuario" data-toggle="modal" data-target="#modal-nuevoUsuario">
                                Registrar nuevo usuario
                                <i class="fas fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                    <!--Tabla de usuarios registrados-->
                    <div class="row" id="tabla-de-usuarios">
                        <div class="col-lg-12">
                            <table id="example" class="table table-striped table-bordered tabla-usuarios" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Rol</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido Paterno</th>
                                        <th scope="col">Apellido Materno</th>
                                        <th scope="col">Nombre de Usuario</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">...</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($getresultado = $usuario->fetch_assoc()) { ?>
                                        <tr>
                                            <th scope="row"> <?php echo $getresultado['id_usuario'] ?> </th>
                                            <th> <?php echo $getresultado['idX_rol'] ?> </th>
                                            <td><?php echo $getresultado['nombre'] ?></td>
                                            <td><?php echo $getresultado['apellido_paterno'] ?></td>
                                            <td><?php echo $getresultado['apellido_materno'] ?></td>
                                            <td><?php echo $getresultado['nombre_usuario'] ?></td>
                                            <td><?php echo $getresultado['correo'] ?></td>
                                            
                                            <!--botones--> 
                                            <td>
                                                <a href="" class="btn btn-outline-primary acciones-btn" data-toggle="modal" data-target="#modal-movimientosUsuario">
                                                    <!--Movimientos--><i class="far fa-folder-open"></i>
                                                </a>
                                                <!--Editar
                                                <a href="modificarUsuario.php?id_usuario=<?= $getresultado['id_usuario'] ?>" class="btn btn-outline-secondary acciones-btn editbtn" data-toggle="modal" data-target="#modal-editarUsuario" >
                                                    <i class="far fa-edit"></i>

                                                </a>-->
                                                <button type="button" class="btn btn-outline-secondary acciones-btn editbtn">
                                                    <i class="far fa-edit"></i>
                                                </button>
                                                <a href="" class="btn btn-outline-danger acciones-btn" data-toggle="modal" data-target="#modal-eliminarUsuario">
                                                    <!--Eliminar--><i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                                        
                    
                    
                </div>
            </div> <!--FIN Contenido principal-->
        </div>

        <!-- Modal: Registro de nuevo usuario-->
        <div class="modal fade" id="modal-nuevoUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <H2 class="modal-title" id="exampleModalLongTitle">Nuevo usuario</H2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div id="msg"></div>
                                        <!-- Mensajes de Verificación -->
                                        <div id="error" class="alert alert-danger ocultar" role="alert">
                                            Las Contraseñas no coinciden, vuelve a intentar!
                                        </div>
                                       
                                        <!-- Fin Mensajes de Verificación -->
                                        <form id="formulario-nuevoUsuario" action="validarRegistroUsuarios.php" method="POST" onsubmit="verificarPasswords(); return false">
                                            <div class="form-row ">
                                                <div class="form-group col-md-6">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                                </div>      
                                            </div>

                                            <div class="form-row ">
                                                <div class="form-group col-md-6">
                                                    <label for="aMaterno">Apellido materno</label>
                                                <input type="text" class="form-control" id="aMaterno" name="aMaterno" required>    
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="aPaterno">Apellido paterno</label>
                                                    <input type="text" class="form-control" id="aPaterno" name="aPaterno" required>    
                                                </div>     
                                                     
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6 ">
                                                    <label for="rol">Rol</label>
                                                    <select class="form-control" id="rol" name="rol">
                                                        <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                                            $consulta = $conexion-> query("SELECT * FROM rol");
                                                            while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                                                echo "<option value ='".$fila['id_rol']."'>".$fila['rol']."</option>"; //muestra los datos de la tabla externa
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nombreUsuario">Nombre de usuario</label>
                                                    <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-12">
                                                    <label for="correo">Correo electronico</label>
                                                    <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" required>      
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="contraseña">Contraseña</label>
                                                    <input type="password" class="form-control"  name="contraseña" id="pass1" required>      
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="confirmarContraseña">Confirmar contraseña</label>
                                                    <input type="password" class="form-control" name="confirmarContraseña" id="pass2" required>      
                                                </div>
                                            </div>
                                            <div class="modal-btns-acciones">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" id="registrar" class="btn btn-success">Registrar</button>
                                            <!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button>-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>  

        <!-- Modal: Movimientos del usuario-->
        <div class="modal fade" id="modal-movimientosUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <H2 class="modal-title" id="exampleModalLongTitle">Movientos</H2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        Mostrar movientos hechos por el usuario...
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>  

        <!-- Modal: Editar informacion del usuario-->
        <div class="modal fade" id="modal-editarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <H2 class="modal-title" id="exampleModalLongTitle">Usuario</H2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div id="msg"></div>
                            <!-- Mensajes de Verificación -->
                            <div id="error" class="alert alert-danger ocultar" role="alert">
                                Las Contraseñas no coinciden, vuelve a intentar!
                            </div>
                            <!-- Fin Mensajes de Verificación -->
                            <form id="formulario-nuevoUsuario" action="validarRegistroUsuarios.php" method="POST" onsubmit="verificarPasswords(); return false">
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="nombre">ID</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $obtenerId ?>" required>
                                    </div>      
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $obtenerArreglo['nombre'] ?>" required>
                                    </div>      
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="aMaterno">Apellido materno</label>
                                    <input type="text" class="form-control" id="aMaterno" name="aMaterno" required>    
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="aPaterno">Apellido paterno</label>
                                        <input type="text" class="form-control" id="aPaterno" name="aPaterno" required>    
                                    </div>     
                                        
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="rol">Rol</label>
                                        <select class="form-control" id="rol" name="rol">
                                            <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                                $consulta = $conexion-> query("SELECT * FROM rol");
                                                while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                                    echo "<option value ='".$fila['id_rol']."'>".$fila['rol']."</option>"; //muestra los datos de la tabla externa
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nombreUsuario">Nombre de usuario</label>
                                        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="correo">Correo electronico</label>
                                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" required>      
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="contraseña">Contraseña</label>
                                        <input type="password" class="form-control"  name="contraseña" id="pass1" required>      
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="confirmarContraseña">Confirmar contraseña</label>
                                        <input type="password" class="form-control" name="confirmarContraseña" id="pass2" required>      
                                    </div>
                                </div>
                                <div class="modal-btns-acciones">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" id="registrar" class="btn btn-success">Guardar cambios</button>
                                <!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button>-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
            
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!--   Datatables-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>  
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>  
        <!-- extension responsive y de bootstrap 4-->
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
        
            
        <script src="script.js">
            /*Archivo js para animacion en menu */ 
        </script>

    </body>
</html>

<script src="js/datatables.js">
    /*Archivo js para plugin datatables*/ 
</script>

<script type="text/javascript">
    function verificarPasswords() {
 
    // Ontenemos los valores de los campos de contraseñas 
    pass1 = document.getElementById('pass1');
    pass2 = document.getElementById('pass2');

    //
    var formulario = document.getElementById("formulario-nuevoUsuario");
 
    // Verificamos si las constraseñas no coinciden 
        if (pass1.value != pass2.value) {
    
            // Si las constraseñas no coinciden mostramos un mensaje 
            document.getElementById("error").classList.add("mostrar");
    
            return false;
        } else {

            
    
            // Si las contraseñas coinciden ocultamos el mensaje de error
            document.getElementById("error").classList.remove("mostrar");
    
            // Mostramos un mensaje mencionando que las Contraseñas coinciden 
            document.getElementById("ok").classList.remove("ocultar");
    
            // Desabilitamos el botón de login 
            //document.getElementById("registrar").disabled = true;
    
            // Refrescamos la página (Simulación de envío del formulario) 
            //setTimeout(function() {
            //  location.reload();
            //}, 3000);

            formulario.submit();
            return true;
        }
 
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.editbtn').on('click', function()
        {
            $('#modal-editarUsuario').modal('show');

            $tr = $(this).closest("td");
            
            var data = $tr.children("id").map(function()){
                return $(this).text();
            }).get();

            console.log(data);

            $('#').val(data[0]);
        });
    });
</script>
