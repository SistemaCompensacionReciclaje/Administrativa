<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Usuarios</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap4.min.css">
    <!--<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/datatables.css" type="text/css" rel="stylesheet"/>-->

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/datatables.js"></script>
    <script src="js/functions.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="librerias/datatable/jquery.dataTables.min.js"></script>
    <script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>

    <!--<script src="main.js"></script>-->

    <?php// require_once "scripts.php";  ?>

  </head>

  <body id="page-top">
    <?php /*
            $servername = 'sistemacompensacionreciclaje.cmeyucgclwtl.us-east-2.rds.amazonaws.com';
            $username = 'SCR2014';
            $pass = 'SCR2014!';
            $database = 'SCR2014';

            $db = mysqli_connect($servername, $username, $pass, $database);

            if(!$db){
              die("Connection fail: " . mysqli_connect_error());
            }
            $salida ="";
            $query = "SELECT * From Usuario";

            if(isset($_POST['consulta'])){
              $q = $db -> real_escape_string($_POST['consulta']);
              $query = "SELECT * FROM Usuario WHERE Nombre1 LIKE '%".$q."%'";
            
            }
            $resultado = $db-> query($query);
*/
           ?>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Start Bootstrap</a>

      <!--<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>-->

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar Sesión</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item active">
          <a class="nav-link" href="usuarios.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Usuarios</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="materiales.php">
            <i class="fas fa-fw fa-cubes"></i>
            <span>Materiales</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="estaciones.php">
            <i class="fas fa-fw fa-recycle"></i>
            <span>Estaciones</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Transacciones.php">
            <i class="fas fa-fw fa-recycle"></i>
            <span>Transacciones</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="ofertas.php">
            <i class="fas fa-fw fa-award"></i>
            <span>Ofertas</span>
          </a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="card text-left">
                  <div class="card-header">
                    USUARIOS
                  </div>
                  <div class="card-body">
                    <a class="btn btn-success" href="usuarios_agregar.php">Agregar Nuevo 
                    <span class="fas fa-fw fa-user-plus"></span>
                    </a>
                    <!--<span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
                      Agregar nuevo <span class="fa fa-plus-circle"></span>
                    </span>-->
                    <hr>
                    <div id="tablaDatatable">
                        <?php 

                        //require_once "clases/conexion.php";
                        //$obj= new conectar();
                        //$conexion=$obj->conexion();

                        $servername = 'sistemacompensacionreciclaje.cmeyucgclwtl.us-east-2.rds.amazonaws.com';
                        $username = 'SCR2014';
                        $pass = 'SCR2014!';
                        $database = 'SCR2014';

                        $conexion = mysqli_connect($servername, $username, $pass, $database);

                        $sql="SELECT NumCuenta,
                        Nombre1,
                        Apellido1,
                        Telefono,
                        CorreoElectronico,
                        FechaNacimiento,
                        PuntosAcumulados
                        from Usuario";
                        $result=mysqli_query($conexion,$sql);

                        function busca_edad($fecha_nacimiento){
                          $dia=date("d");
                          $mes=date("m");
                          $ano=date("Y");

                          $dianaz=date("d",strtotime($fecha_nacimiento));
                          $mesnaz=date("m",strtotime($fecha_nacimiento));
                          $anonaz=date("Y",strtotime($fecha_nacimiento));
                      //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual
                          if (($mesnaz == $mes) && ($dianaz > $dia)) {
                          $ano=($ano-1); }
                      //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
                          if ($mesnaz > $mes) {
                          $ano=($ano-1);}
                //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
                          $edad=($ano-$anonaz);
                          
                          return $edad;
                        }
                        ?>
                        <div>
                          <table class="table table-hover table-condensed table-bordered" id="iddatatable">
                            <thead style="background-color: #28a745;color: white; font-weight: bold;">
                              <tr>
                                <td width="100">No. Cuenta</td>
                                <td>Nombre</td>
                                <td>Telefono</td>
                                <td>Correo</td>
                                <td>Edad</td>
                                <td>Puntos</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                              </tr>
                            </thead>
                            <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
                              <tr>
                                <td width="100">No. Cuenta</td>
                                <td>Nombre</td>
                                <td>Telefono</td>
                                <td>Correo</td>
                                <td>Edad</td>
                                <td>Puntos</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                              </tr>
                            </tfoot>
                            <tbody >
                              <?php 
                              while ($mostrar=mysqli_fetch_row($result)) {
                                ?>
                                <tr >
                                  <td width="100"><?php echo $mostrar[0] ?></td>
                                  <td><?php echo $mostrar[1].' '.$mostrar[2] ?></td>
                                  <td><?php echo $mostrar[3] ?></td>
                                  <td><?php echo $mostrar[4] ?></td>
                                  <td><?php echo busca_edad($mostrar[5]) ?></td>
                                  <td><?php echo $mostrar[6] ?></td>
                                  <td style="text-align: center;">
                                    <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
                                      <span class="fas fa-user-edit"></span>
                                    </span>
                                  </td>
                                  <td style="text-align: center;">
                                    <span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
                                      <span class="fas fa-user-minus"></span>
                                    </span>
                                  </td>
                                </tr>
                                <?php 
                              }
                              ?>
                            </tbody>
                          </table>
                        </div>

                        <script type="text/javascript">
                          $(document).ready(function() {
                            $('#iddatatable').DataTable();
                          } );
                        </script>
                    </div>
                  </div>
                  <div class="card-footer text-muted">
                    Tabla Usuarios
                  </div>
              </div>
            </div>
          </div>

        </div>
        <br>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © SCR 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar Sesión" debajo si desea finalizar la sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.php">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div> 

  </body>

</html>
