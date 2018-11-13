<?php
function conectarse()
{
//conectar con el servidor de base de datos
if(!($link = mysqli_connect("localhost", "root", "")))
{
	echo "Error conectando a la Base de Datos.";
	exit();
}

if(!mysqli_select_db( $link,"BD_Faedcoh"))
	{
		echo "Error seleccionando Base de Datos.";
		exit();
	}
	return $link;
}
?>
