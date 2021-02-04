<?php

include('conexion_db.php');

session_start();

if(!isset($_SESSION['id'])){
    header("Location: index.php");
}

$nombre = $_SESSION['nombreUsuario'];
$tipo_usuario = $_SESSION['rol'];

$db = new Db();

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
        <link href="css/general-navbar-sidebar-menu-styles.css" rel="stylesheet" type="text/css">
        <!--<link href="css/inicio-style.css" rel="stylesheet" type="text/css">-->
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
        <?php include('navbar-menu.php'); ?>

        <div class="wrapper fixed-left">
            <!--Menu sidebar-->
            <?php include('sidebar-menu.php'); ?>
            

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
                            <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
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
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
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
                                        <form id="formulario-nuevoUsuario" action="validarRegistroUsuario.php" method="POST" onsubmit="verificarPasswords(); return false">
                                            <div class="form-row ">
                                                <div class="form-group col-md-6">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                                </div>      
                                            </div>

                                            <div class="form-row ">
                                                <div class="form-group col-md-6">
                                                    <label for="aMaterno">Apellido paterno</label>
                                                <input type="text" class="form-control" id="aPaterno" name="aPaterno" required>    
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="aPaterno">Apellido materno</label>
                                                    <input type="text" class="form-control" id="aMaterno" name="aMaterno" >    
                                                </div>     
                                                     
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6 ">
                                                    <label for="rol">Rol</label>
                                                    <select class="form-control" id="rol" name="rol">
                                                        <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                                            $get_roles = "SELECT * FROM rol";
                                                            $consulta = $db -> Db_query($get_roles);
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
                                                    <input type="password" class="form-control"  name="password" id="password" required>      
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="confirmarContraseña">Confirmar contraseña</label>
                                                    <input type="password" class="form-control" name="confirmarpass" id="confirmarpass" required>      
                                                </div>
                                            </div>
                                            
                                            <div class="modal-btns-acciones">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" id="registrar" name='enviar' class="btn btn-success">Registrar</button>
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
                             <!-- FORMULARIO VENTANA MODAL EDITAR USUARIO -->
                            <form id="formulario-nuevoUsuario" action="" method="POST" onsubmit="verificarPasswords(); return false">
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="id-edit">ID Usuario</label>
                                        <input type="text" class="form-control" id="id-edit" name="id-edit" value="" required>
                                    </div>      
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="id-rol-edit">ID rol</label>
                                        
                                        <input type="text" class="form-control" id="id-rol-edit" name="id-rol-edit" value="" required>
                                    </div>      
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="nombre-edit">Nombre</label>
                                        <input type="text" class="form-control" id="nombre-edit" name="nombre-edit" value="" required>
                                    </div>      
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="aMaterno-edit">Apellido materno</label>
                                    <input type="text" class="form-control" id="aMaterno-edit" name="aMaterno-edit" required>    
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="aPaterno-edit">Apellido paterno</label>
                                        <input type="text" class="form-control" id="aPaterno-edit" name="aPaterno-edit" required>    
                                    </div>     
                                        
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="rol-edit">Rol</label>
                                        <select class="form-control" id="rol-edit" name="rol-edit">
                                            <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                                $get_roles = "SELECT * FROM rol";
                                                $consulta = $db -> Db_query($get_roles);
                                                while($getFila=$consulta->fetch_array()){ //recorre el arreglo
                                                    echo "<option value ='".$getFila['id_rol']."'>".$getFila['rol']."</option>"; //muestra los datos de la tabla externa
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nombreUsuario-edit">Nombre de usuario</label>
                                        <input type="text" class="form-control" id="nombreUsuario-edit" name="nombreUsuario-edit" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="correo-edit">Correo electronico</label>
                                        <input type="email" class="form-control" id="correo-edit" name="correo-edit" aria-describedby="emailHelp" required>      
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="contraseña-edit">Contraseña</label>
                                        <input type="password" class="form-control"  name="contraseña-edit" id="pass1" required>      
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="confirmarContraseña-edit">Confirmar contraseña</label>
                                        <input type="password" class="form-control" name="confirmarContraseña-edit" id="pass2" required>      
                                    </div>
                                </div>
                                <div class="modal-btns-acciones">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" id="registrar" class="btn btn-success">Guardar cambios</button>
                                <!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button>-->
                                    <input type="hidden" id="hidden_user_id">
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

<script src="js/funciones.js">
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
        /*
        $('.editbtn').on('click', function()
        {
            $('#modal-editarUsuario').modal('show');

                
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                //$('#id').val(data[0]);
                $('#nombre-edit').val(data[0]);
                $('#aMaterno-edit').val(data[1]);
                
            
        });*/
        /*
        $(document).on('click', '.editbtn', function(){  
            $('#modal-editarUsuario').modal('show');
            
          
        });
        /*
        function GetUserDetails() {
            // Add User ID to the hidden field for furture usage
            //$("#hidden_user_id").val(id);

            /*
            $.post("readUserDetails.php", {
                    id: id
                },
                function (data, status) {
                    // PARSE json data
                    var user = JSON.parse(data);
                    // Assing existing values to the modal popup fields
                    $("#update_idalumno").val(user.idalumno);
                    $("#update_codalumno").val(user.codalumno);
                    $("#update_obs").val(user.obs);
                }
            );
            // Abrir modal popup
            $("#modal-editarUsuario").modal("show");
        } */
    });
</script>

<!--FUNCIONAMIENTO PARA MENU NAVBAR-->
<script>
    const menuBtn = document.querySelector(".menu-navbar span");
    const logoutBtn = document.querySelector(".logout-icon-navbar");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");

    menuBtn.onclick = ()=>{
        items.classList.add("active");
        menuBtn.classList.add("hide");
        logoutBtn.classList.add("hide");
        cancelBtn.classList.add("show");    
    }
    cancelBtn.onclick = ()=>{
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        logoutBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        
        cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
        logoutBtn.classList.add("hide");
        cancelBtn.classList.add("show");
    }

</script>