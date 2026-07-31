<?php
$host_aceptados = array('localhost', '127.0.0.1', '192.168.165.5' );

$metodo_aceptado = "POST";
$usuario_correcto = base64_encode(hash("sha1", "Admin"));
$password_correcto = base64_encode(hash("sha1", "Admin"));
$txt_usuario = ((isset($_POST["txt_usuario"])) ? $_POST["txt_usuario"] : null); 
$txt_password = ((isset($_POST["txt_password"])) ? $_POST["txt_password"] : null);
$token = "";

if(in_array($_SERVER["HTTP_HOST"], $host_aceptados)){

    if($_SERVER["REQUEST_METHOD"] == $metodo_aceptado){
        //EL METODO DESDE EL FORMULKARIO ES CORRECTO (GET/POST)
        if(isset($txt_usuario) && !empty($txt_usuario)){

            if(isset($txt_password) && !empty($txt_password)){
                if($txt_usuario == $usuario_correcto){
                    if($txt_password == $password_correcto){
                        $ruta = "welcome.php";
                        $msg = "";
                        $codigo_estado = 200;
                        $texto_estado = "OK";
                        list($usec,$sec) = explode('', microtime());
                        $token = base64_encode(date("Y-m-d H:i:s", $sec).substr($usec,1));
                    }else{
                        //NO COINCIDEN LOS VALORES DE LACONTRASEÑA
                        $ruta = "";
                        $msg = "La contraseña no es correcta";
                        $codigo_estado = 401;
                        $texto_estado = "Unauthorized";
                        $token = "";
                    }
                }else{
                    $ruta = "";
                    $msg = "El usuario no es correcta";
                    $codigo_estado = 401;
                    $texto_estado = "Unauthorized";
                    $token = "";

                }
            }else{
                $ruta = "";
                $msg = "Campo de Contraseña vacio";
                $codigo_estado = 412;
                $texto_estado = "Precondition Failed";
                $token = ""; 
            }
        }else{
            $ruta = "";
            $msg = "Campo de usuario vacio";
            $codigo_estado = 412;
            $texto_estado = "Precondition Failed";
            $token = ""; 
        }
    }else{
        //TIPO DE PETICION NO AUTORIZADO
        $ruta = "";
        $msg = "El metodo http no es permitido ";
        $codigo_estado = 405;
        $texto_estado = "Method Not Allowed";
        $token = ""; 
    }
}else{
    $ruta = "";
    $msg = "El direccion ip no esta permitida ";
    $codigo_estado = 403;
    $texto_estado = "Forbidden";
    $token = ""; 
}

$arreglo_respuesta = array(
    "status" => ((intval($codigo_estado) == 200)? "succes" : "error"),
    "error" => ((intval($codigo_estado) == 200)? "" : array("codigo" => $codigo_estado, "message" => $msg)),
    "data" => array(
        "url" => $ruta,
        "token" => $token
    
    ),
    "count" => 1
);

header("HTTP/1.1 " .$codigo_estado. " ".$texto_estado);
header("Content-Type: application/json");
echo(json_encode($arreglo_respuesta));
?>