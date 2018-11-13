<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$password=$_POST['password'];

conectarse();

$query = "SELECT * FROM usuario WHERE nombre='$nombre' AND clave='$password'";

$result = mysqli_query(conectarse(),$query);

$row = mysqli_fetch_assoc($result);


if($row)
{
	session_start();
	$_SESSION['usuario'] = array('nom' => $row['nombre'], 'ape'=> $row['apellidos']);
	header("Location: ../index.php");
}
else
{
	header("Location: ../login/login.php?error=si");
}

mysqli_free_result($rs);
mysqli_close($conn);
?>