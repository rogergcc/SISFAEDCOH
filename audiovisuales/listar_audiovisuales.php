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
<link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">

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
          <li class="active">
            <a href="../audiovisuales/listar_audiovisuales.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Producto Audio Visual</p>
            </a>
          </li>
          <li>
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
            <a class="navbar-brand">Listado de Productos Audiovisuales</a>
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
                 

                  <a type="btn btn-secondary" href="agregar_audiovisuales.php" class="btn btn-secondary btn-lg btn-block" >Agregar Producto Audiovisual</a>

                
                  <?php
                  //incluir modulo de conexion
                  include ("../seguridad/conexion.php");
                  //abrir la conexion con el sevidor de base de datos
                  $link = conectarse();
                ?>


                 
                <table id="example2" class="table table-bordered table-striped table-responsive table-hover">
                <thead class="text-center thead-dark">
                  <tr class="tabla">
                      <th width="20"><font size=2>Codigo</th>
                      <th width="20"><font size=2>Curso</th>
                      <th width="30"><font size=2>profesor</th>
                      <th width="30"><font size=2>Equipo Produccion</th>
                      <th width="30"><font size=2>Produccion</th>
                      <th width="40"><font size=2>Genero</th>
                      <th width="40"><font size=2>Fecha Produccion</th>
                      <th width="40"><font size=2>Sinopsis</th>
                      <th width="150"><font size=2>Video</th>
                      <th width="30"><font size=2>Estado</th>
                      <th width="30">#</th>  </font>   
                  </tr>
                </thead>

                 <?php
                   //enviar consulta
                   $instruccion = "SELECT a.codigoaudiovisual, c.nombrecurso, p.nombreprofesor, a.equipoproduccion, a.produccion, a.genero,  a.fechaproduccion, a.sinopsis ,a.video, a.estado FROM audiovisual AS a INNER JOIN curso AS c INNER JOIN profesor AS p ON a.codigocurso=c.codigocurso and a.codigoprofesor=p.codigoprofesor";
                   
                   //envia una sentencia a la base activa en el servidor asociado en este caso a la sentencia sql
                   $rs = mysqli_query(conectarse(),$instruccion) or die("Fallo la consulta");
                   
                   //devuelve el numero de filas (registros) encontrados
                   $n = mysqli_num_rows($rs);
                   
                   //devuelve una matriz que corresponde a la sentencia extraida, o falso si no 
                   //quedan mas filas
                   while($campo = mysqli_fetch_array($rs)){
                  ?>
                <tbody>
                  <tr>
                    <font size=2>
                    <th><?php echo $campo["codigoaudiovisual"]; ?></th>
                      <th><?php echo $campo["nombrecurso"]; ?></th>
                      <th><?php echo $campo["nombreprofesor"]; ?></th>
                      <th><?php echo $campo["equipoproduccion"]; ?></th>
                      <th><?php echo $campo["produccion"]; ?></th>
                      <th><?php echo $campo["genero"]; ?></th>
                      <th><?php echo $campo['fechaproduccion']; ?></th>
                      <th><?php echo $campo["sinopsis"]; ?></th>
                      <th><video width="150" height="150" controls><source src="productos/<?php echo $campo['video'];?>" type="video/mp4"></video></th>
                      <th><?php echo $campo["estado"]; ?></th>
                      <th>
                      <a class="btn btn-warning" href="modificar_audiovisuales.php?cod=<?php echo $campo['codigoaudiovisual']?>">Modificar</a>
                    <hr>
                      <a class="btn btn-danger" href="eliminar_audiovisuales.php?cod=<?php echo $campo['codigoaudiovisual']?>" onclick="return confirm('¿Esta seguro de eliminar?...');">Eliminar</a>                        
                      </th>
                      </font>
                  </tr>
                </tbody>
                  <?php
                   }
                   //cerrar la conexion con la base de datos
                   mysqli_close($link);
                  ?>
                </table>
                 
                <!-- InstanceEndEditable -->
                  
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

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="../assets/js/general/jquery.datatables.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#example2').DataTable({
      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    });
     demo.initGoogleMaps();
  } );
  </script>
</body>



</html>