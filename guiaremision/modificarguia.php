<?php

// $data = file_get_contents('php://input');
// $json = json_decode($data);
// //$service = $json->{'codigo'};

// print $json;


if($_SERVER['REQUEST_METHOD']=='POST'){

                $postBody = file_get_contents("php://input");
                
                 $convert = json_decode($postBody,true);
                if(json_last_error()==0){

                   print json_encode($convert);
                       http_response_code(200);

                }else{
                    http_response_code(400);
                        $datos["estado"] = 1;
                        $datos["metas"] = $convert;
                     print_r($datos);
                }

            }else{
                http_response_code(405);
            }

?>

