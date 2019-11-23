<?php
require_once('utilidades.php');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

  // Allow from any origin
    // if (isset($_SERVER['HTTP_ORIGIN'])) {
    //     header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    //     header('Access-Control-Allow-Credentials: true');
    //     header('Access-Control-Max-Age: 86400');    // cache for 1 day
    // }

    // // Access-Control headers are received during OPTIONS requests
    // if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    //     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
    //         header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

    //     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
    //         header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    //     exit(0);
    // }

    //echo "You have CORS!";

if(isset($_GET['url'])){
            $actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            
            $var = $_GET['url'];

            $numero = substr($actual_link, strrpos($actual_link, '/') + 1);
            $pagina = substr($actual_link, strrpos($actual_link, 'i/') + 2);

            if($_SERVER['REQUEST_METHOD']=='GET'){
                //$numero = intval(preg_replace('/[^0-9]+/','',$var),10);
               
                //print_r($var);
                //print_r($numero);

                switch($pagina){
                    case "accesorios";
                            $resp = TodoslosAccesorios();
                            print_r(json_encode($resp) );
                            http_response_code(200);
                    break;
                    case "accesorio/$numero";
                        
                            $resp = accesorioxCodigo($numero);
                            //print_r($n2);
                            print_r(json_encode($resp) );
                            http_response_code(200);
                    break;
                 
                    default;

                }

            }else if($_SERVER['REQUEST_METHOD']=='POST'){
                //print_r("POSTTTING");
                $postBody = file_get_contents("php://input");
                $convert = json_decode($postBody,true);

               
                //print_r($postBody);
                if(json_last_error()==0){

                    switch($pagina){
                        
                        case "accesorio";
                                CrearRestaurante($convert);
                                http_response_code(200);
                        break;

                        case "login";
                                loginUsuario($convert);
                                http_response_code(200);
                        break;
                        default;

                    }

                }else{
                    http_response_code(400);
                        $datos["estado"] = 1;
                        $datos["metas"] = $convert;
                     print_r($datos);
                }

            }else{
                http_response_code(405);
            }

}else{?>


  <link rel="stylesheet" href="public/estilo.css" type="text/css">
  <style type="text/css">
      body{
        background: gray;
      }
  </style>
  <div class='container'>
    <h1>Faedcoh API</h1>
    <div class='divbody'>

    <p>API</p>
            <code>
                <br>
                POST /login

                <!-- <p style="color: #cb2d2d;">Obligatorios</p> -->

                      <!-- <br>RestauranteNombre
                      <br>RestauranteLogo
                      <br>RestauranteDescripcion -->
                <br>
                <!-- <p style="color: #4448e2;">Opcional</p>
                          <br>RestauranteRating
                          <br>RestauranteUbicacion -->


            </code>
            <code>
                GET /accesorios
                <br/>
                GET /accesorio/$id
              
            </code>

    </div>
    <p class="divfooter">wwww.</p>
  </div>



 <?php
}

?>
