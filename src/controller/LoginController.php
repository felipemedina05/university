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

            $password = $request["contrasena"] ;
        
    { if ( $password === $data["contrasena"]/* password_verify($password,$data["contrasena"]) */)
                 {
              
                    //agregar la verificacion de la contraseña hash con passwor veryfy//    
                    session_start();
                    $_SESSION["user"] = $data;
                    if ($data["rol_id" ]  === 1 ) 
                        {   
                            header("Location: /src/views/admin/admin.php");
                        } elseif ($data["rol_id" ]  ===2 ) 
                            {
                                header("Location: /maestro");
                            } else
                                {
                                    header("Location: /estudiante");

                                }
                 }else 
                    {
                        echo "ese passwor es errado";
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
