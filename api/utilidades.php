<?php

// header('Access-Control-Allow-Origin: *');

// header('Access-Control-Allow-Methods: GET, POST');

// header("Access-Control-Allow-Headers: X-Requested-With");

require_once("db.php");



function TodoslosAccesorios(){
    $Query = "select * from accesorio";
    $Respuesta = ObtenerRegistros($Query);
    //  print_r($Respuesta);
    //print json_encode
    return ConvertirUTF8($Respuesta);
}


function accesorioxCodigo($id){
    $Query = "select * FROM accesorio where codigoaccesorio = $id";
                
    
    $data ='';
    $Respuesta = ObtenerRegistros($Query);
    $mensaje="";
    if ($Respuesta==null) {
        $mensaje= "Codigo ".$id." no encontrado";
        $status=0;
    }else{
        $mensaje = "Codigo correcto";
        $data=$Respuesta[0];
        $status=1;
    }
    
    return (array("status"=>$status,"cod"=>$id,"data"=>$data,"mensaje"=>$mensaje));
    //  print_r($Respuesta);
    
    
}

function loginUsuario($arrayjson){
    $nombre = $arrayjson['nombre'];
    $clave = $arrayjson['clave'];
    $query = "select * FROM usuario where nombre = '$nombre' and clave = '$clave' and estado='activo'" ;
    //print_r($query);
    $respuesta = NonQuery($query);

    $retornar='';
    if ($respuesta) {
        // Código de éxito
        $usuario = ObtenerRegistros($query);
        $retornar = json_encode(
            array(
                
                'estado' => '1',
                'usuario'=>$usuario[0],
                'respuesta' => true,
                'mensaje' => 'Login Correcto')
        );
    } else {
        // Código de falla
        $retornar = json_encode(
            array(
                'estado' => '2',
                'respuesta' => false,
                'mensaje' => 'Usuario y/o contraseña incorrectos')
        );
    }
    print $retornar;

}
function CrearRestaurante($array){

            $Nombre = $array['RestauranteNombre'];

            $Logo =$array['RestauranteLogo']; ;
            $Descripcion =$array['RestauranteDescripcion']; 

           
            $Longitud =$array['RestauranteLongitud']; 
            $Latitud =$array['RestauranteLatitud']; 

            $query = "insert into restaurante(RestauranteNombre,RestauranteLogo,RestauranteDescripcion,RestauranteLongitud,RestauranteLatitud)
            values('$Nombre','$Logo','$Descripcion','$Longitud','$Latitud')";
            $respuesta = NonQuery($query);

            //print_r($query);
             $retornar='';
            if ($respuesta) {
                // Código de éxito
                $retornar = json_encode(
                    array(
                        'estado' => '1',
                        'respuesta' => true,
                        'mensaje' => 'Creacion exitosa')
                );
            } else {
                // Código de falla
                $retornar = json_encode(
                    array(
                        'estado' => '2',
                        'respuesta' => false,
                        'mensaje' => 'Creacion fallida')
                );
            }
            print $retornar;

}



?>
