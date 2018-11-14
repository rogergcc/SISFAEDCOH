<?php
include("../seguridad/seguridad.php");
?>
<!doctype html>
<link rel="shortcut icon" href="../imagenes/upt.jfif">
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sistema Faedcoh
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
   


      <div class="logo">
        <a href="../index.php" class="simple-text logo-mini">
          UPT
        </a>
        <a href="../index.php" class="simple-text logo-normal">
          FAEDCOH
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="../inventario/listar_salastecnologicas.php">
              <i class="now-ui-icons design_app"></i>
              <p>Inventario</p>
            </a>
          </li>
          <li>
            <a href="../audiovisuales/listar_audiovisuales.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Producto Audio Visual</p>
            </a>
          </li>
          <li class="active">
            <a href="../guiaremision/listar_guiaremision.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Guia Remision</p>
            </a>
          </li>
          
          <li class="active-pro">
            <a href="#">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Versión 01</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Listado de las Guias de Remision</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <div id="txtUser">Bienvenido <br> <?php echo $_SESSION['usuario']['nom']. ' ' .$_SESSION['usuario']['ape'];?></div>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block"></span>
                  </p>
                </a>

                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="../seguridad/salir.php">Cerrar Sesion</a>
                </div>
              </li>
             
              <li class="nav-item">
               
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
<!-- CONTENIDO -->
            <div class="card ">
              <div class="card-header ">
               
              </div>
              <div class="card-body ">
                
                 <section><!-- InstanceBeginEditable name="EditRegion1" -->
                 

                  <a type="btn btn-secondary" href="agregar_guiaremision.php" class="btn btn-secondary btn-lg btn-block" >Agregar una nueva Guia de Remision</a>

                
                  <?php
                  //incluir modulo de conexion
                  include ("../seguridad/conexion.php");
                  //abrir la conexion con el sevidor de base de datos
                  $link = conectarse();
                ?>
     
                <table id="example2" class="table table-bordered table-striped table-responsive table-hover">
                <thead class="text-center thead-dark">
                  <tr class="tabla">
                      <th >Codigo</th>
                      <th >Fecha Traslado</th>
                      <th >Punto de Partida</th>
                      <th >Punto de Llegada</th>
                      <th >Motivo del Traslado</th>
                      <th >Accesorios Transportados</th>
                      <th >Responsable del Traslado</th>
                      <th >#</th>    
                  </tr>
                </thead>
                <tbody>
                 <?php
                   $instruccion = "SELECT * FROM guiaremision";
                   $rs = mysqli_query(conectarse(),$instruccion) or die("Fallo la consulta");
                   $n = mysqli_num_rows($rs);

                   while($campo = mysqli_fetch_array($rs)){
                  ?>
                
                  <tr>
                    <font size=2>
                    <th><?php echo $campo["codigoguiaremision"]; ?></th>
                      <th><?php echo $campo["fechatraslado"]; ?></th>
                      <th><?php echo $campo["puntopartida"]; ?></th>
                      <th><?php echo $campo["puntollegada"]; ?></th>
                      <th><?php echo $campo["motivotraslado"]; ?></th>
                      <th><?php echo $campo["nombreaccesorio"]; ?></th>
                      <th><?php echo $campo['responsabletraslado']; ?></th>
                      <th>
                      <a class="btn btn-warning" href="modificar_guiaremision.php?cod=<?php echo $campo['codigoguiaremision']?>">Modificar</a>
                    <hr>
                      <a class="btn btn-danger" href="eliminar_guiaremision.php?cod=<?php echo $campo['codigoguiaremision']?>" onclick="return confirm('¿Esta seguro de eliminar?...');">Eliminar</a>                        
                      </th>
                      </font>
                  </tr>
                
                  <?php
                   }
                   mysqli_close($link);
                  ?>
                  </tbody>
                </table>
                  </section>


              </div>
            </div>
<!-- FIN DEL CONTENIDO -->
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
 
          <div class="copyright">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Designed by
            <a href="#" target="_blank">kevin cutipa</a>
            <a href="#" target="_blank">Faedcoh</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
<script src="../assets/js/general/general.js"></script>
<script src="../assets/js/general/jquery.datatables.min.js"></script>
  <script src=""></script>
</body>



</html>