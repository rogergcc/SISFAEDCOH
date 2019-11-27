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
               
              </div>
              <div class="card-body ">
                
            

                   
                    <form method="post" action="ingresar.php" enctype="multipart/form-data">

                    <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre de usuario" required>                  
                    </div>

                    <div class="form-group">
                    <label for="apellidos">Apellidos </label>
                    <input type="text" class="form-control" name="apellidos" placeholder="Ingrese sus apellidos" required>
                    </div>
                      
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Ingrese su email" required>                  
                    </div>

                    <div class="form-group">
                    <label for="clave">Clave</label>
                    <input type="text" class="form-control" name="clave" placeholder="Ingrese su clave de Usuario" required>                  
                    </div>
                 
					<div class="form-group">
                      <label>Estado</label>
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="customControlValidation2" name="estado" value="activo" checked>
                      <label class="custom-control-label" for="customControlValidation2">Activo</label>
                    </div> 
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="customControlValidation3" name="estado" value="inactivo" required>
                      <label class="custom-control-label" for="customControlValidation3">Inactivo</label>
                    </div> 
                    </div>
                    
                   
                    
                    <div class="form-group">
                        <td colspan="2" align="center">
                        <input class="btn btn-primary" type="submit" value="Registrar Nuevo Usuario" name="enviar">
                        </td>
                    </div>
                   
				   
				   
                    </form>
           

                <!-- InstanceEndEditable -->
                  
               


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