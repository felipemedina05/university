<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/model/Usuario.php";

class LoginController {

    public static function index()
    {
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/login.php";
    }

    public static function login($request)
    {
        $data = usuario::findCorreo($request["correo"]);
        if ($data === false) 
        {
            echo "datos incorrectos" ;
        }else 
            {
                        
                //agregar la verificacion de la contraseña hash con passwor veryfy//    
                session_start();
                $_SESSION["user"] = $data;
                if ($data["rol_id" ]  === 1 ) 
                    {
                        header("Location: /src/views/admin.php");
                    } elseif ($data["rol_id" ]  ===2 ) 
                        {
                            header("Location: /src/views/maestro.php");
                        } else
                            {
                                header("Location: /src/views/alumno.php");

                            }
            } 
            
        
        
    }
 
    public static function logout()
    {
        session_start();
        session_destroy();
        header("Location: /index.php");
    }

}
