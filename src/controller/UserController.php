<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/model/Usuario.php";

class UserController {

    public static function index()
    {
       include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/login.php";
    }

    public static function vadmin()
    {
        header("Location: /src/views/admin.php");
    }

    public static function vmaestro()
    {
        header("Location: /src/views/maestro.php");
    }

    public static function valumno()
    {
        header("Location: /src/views/maestro.php");
    }

     public static function login($request)
    {
        $data = usuario::findCorreo($request["correo"]);
        if ($data === true) 
        {
            //agregar la verificacion de la contraseña hash con passwor veryfy//    
            session_start();
            $_SESSION["user"] = $data;
            header("Location: /admin");
            
        }else {
                       
            echo "datos incorrectos" ;
        }
    }  

   


}



?>