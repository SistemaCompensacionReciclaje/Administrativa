<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Agregar Usuarios</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Inicio</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

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
              <div class="row">
                <div class="col-md-4">
                <h2>Usuarios</h2>
                <h3>Agregar Nuevo Usuario</h3>
                </div>
                <div class="col-md-4">
                  <br>
                <h5 align="center">Número de Cuenta:</h5>
                <h5 align="right">0000000</h5>
                </div>
              </div>

                          <form class="form-horizontal">
                          <fieldset>

                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Nombre1">1er Nombre</label>  
                            <div class="col-md-8">
                            <input id="Nombre1" name="Nombre1" type="text" placeholder="" class="form-control input-md" required="">
                              
                            </div>
                          </div>

                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Nombre2">2do Nombre</label>  
                            <div class="col-md-8">
                            <input id="Nombre2" name="Nombre2" type="text" placeholder="" class="form-control input-md" required="">
                              
                            </div>
                          </div>

                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Apellido1">1er Apellido</label>  
                            <div class="col-md-8">
                            <input id="Apellido1" name="Apellido1" type="text" placeholder="" class="form-control input-md" required="">
                              
                            </div>
                          </div>

                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Apellido2">2do Apellido</label>  
                            <div class="col-md-8">
                            <input id="Apellido2" name="Apellido2" type="text" placeholder="" class="form-control input-md" required="">
                              
                            </div>
                          </div>

                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Cedula">Cédula</label>  
                            <div class="col-md-8">
                            <input id="Cedula" name="Cedula" type="text" placeholder="" class="form-control input-md" required="">
                              
                            </div>
                          </div>

                          <!-- Password input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="PIN1">PIN</label>
                            <div class="col-md-8">
                              <input id="PIN1" name="PIN1" type="password" placeholder="" class="form-control input-md" required="">
                              
                            </div>
                          </div>

                          <!-- Password input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="PIN2">Validación de PIN</label>
                            <div class="col-md-8">
                              <input id="PIN2" name="PIN2" type="password" placeholder="" class="form-control input-md" required="">
                              
                            </div>
                          </div>

                          <!-- Multiple Radios (inline) -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Tipo">Tipo de Cuenta</label>
                            <div class="col-md-4"> 
                              <label class="radio-inline" for="Tipo-0">
                                <input type="radio" name="Tipo" id="Tipo-0" value="1" checked="checked">
                                Usuario
                              </label> 
                              <label class="radio-inline" for="Tipo-1">
                                <input type="radio" name="Tipo" id="Tipo-1" value="2">
                                Administrador
                              </label>
                            </div>
                          </div>

                          <!-- Multiple Radios (inline) -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Sexo">Sexo</label>
                            <div class="col-md-4"> 
                              <label class="radio-inline" for="Sexo-0">
                                <input type="radio" name="Sexo" id="Sexo-0" value="Masculino" checked="checked">
                                Masculino
                              </label> 
                              <label class="radio-inline" for="Sexo-1">
                                <input type="radio" name="Sexo" id="Sexo-1" value="Femenino">
                                Femenino
                              </label>
                            </div>
                          </div>

                          <!-- Select Basic -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Dia">Fecha de Nacimiento</label>
                            <div class="main row col-md-12">
                              <div class="col-md-2">
                                <select id="Dia" name="Dia" class="form-control">
                                  <option value="0">Día</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                                  <option value="15">15</option>
                                  <option value="16">16</option>
                                  <option value="17">17</option>
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option>
                                </select>
                              </div>
                               <div class="col-md-2">
                                  <select id="Mes" name="Mes" class="form-control">
                                    <option value="0">Mes</option>
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                  </select>
                                </div>
                                <div class="col-md-2">
                                  <select id="Mes" name="Mes" class="form-control">
                                    <option value="0">Año</option>
                                    <option value="1">2018</option>
                                    <option value="2">2017</option>
                                    <option value="3">2016</option>
                                    <option value="4">2015</option>
                                    <option value="5">2014</option>
                                    <option value="6">2013</option>
                                    <option value="7">2012</option>
                                    <option value="8">2011</option>
                                    <option value="9">2010</option>
                                    <option value="10">2009</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                  </select>
                                </div>
                              </div>
                          </div>

                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Direccion">Dirección</label>  
                            <div class="col-md-8">
                            <input id="Direccion" name="Direccion" type="text" placeholder="" class="form-control input-md" required="">
                              
                            </div>
                          </div>

                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Telefono">Teléfono</label>  
                            <div class="col-md-8">
                            <input id="Telefono" name="Telefono" type="text" placeholder="" class="form-control input-md" required="">
                              
                            </div>
                          </div>

                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="Correo">Correo Electrónico</label>  
                            <div class="col-md-8">
                            <input id="Correo" name="Correo" type="text" placeholder="" class="form-control input-md" required="">
                              
                            </div>
                          </div>

                          </fieldset>
                          </form>
              <center><a  class="btn btn-success" href="usuarios.php">Agregar 
                <span class="fas fa-fw fa-user-plus"></span>
              </a></center>  
              <br>
            </div>
          </div>

        </div>

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
            <a class="btn btn-success" href="login.html">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
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

  </body>

</html>
