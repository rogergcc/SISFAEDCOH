

<html lang="en">
<html>
<head>
	<title>Login Faedcoh</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>
	
		
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Login
					</span>
				</div>

				
			<div class="card ">
              <div class="card-header ">
     

	 
                <?php 
                //incluir modulo de conexion
                include ("../seguridad/conexion.php");
                $nombre=$_POST['nombre'];
                $apellidos=$_POST['apellidos'];
                $email=$_POST['email'];
                $clave=$_POST['clave'];
                $estado=$_POST['estado'];
                
                
              
                    
             
             
                //nos conectamso a la BD y actualizamos el registro
                  $link = conectarse();
                  $sql="INSERT INTO usuario (nombre, apellidos, email, clave, estado) VALUES ('$nombre', '$apellidos', '$email', '$clave', '$estado')";
                  $result = mysqli_query($link,$sql) or die("Fallo la consulta");
                
                 if($result==1)
                  {
                  echo "<center>El registro fue satisfactorio</center>";
                  echo "<br>";
                 
                  }
                  else
                  {
                  echo "<center>Error en el registro</center>";
                  
                  }
                 
                ?>     
                                  
                   <center><a class="btn btn-warning" href="login.php">Retroceder</a></center>
           
         
               


			   
              </div>
            </div>
				
				
				<a class="btn btn-warning" href="login.php">Atras</a>
			</div>
		</div>
	</div>
		

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	
    
</body>
</html>