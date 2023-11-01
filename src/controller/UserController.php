<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/model/Usuario.php";

class UserController {

    public static function index()
    {   
       $usuario = Usuario::all(); 
       include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/login.php";
       
    }

    public static function addAlumno($data)
    {
        $addAlumno=Usuario::addUsuario($data);
        $estudiantes=Usuario::findId(3);
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/alumno.php";
    }

    public static function updateEstudiante($data)
    {
        $updateEstudiantes= Usuario::updateestudiante($data);
        $estudiantes=Usuario::findId(3);
        
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/alumno.php";
     
        
    }   

    public static function editaAlumno($id)
    {   
        $editestudiante= Usuario::editestudiante($id);
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/editaAlumno.php";
    } 

    public static function eliminaAlumno($id)
    {   
        $eliminaAlumno= Usuario::eliminaAlumno($id);
        $estudiantes=Usuario::findId(3);
        
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/alumno.php";
    } 

    public static function estudiante()
    {   
        $estudiantes = usuario::findId(3);
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/alumno.php";
    }

   

     public static function login($request)
    {
        $data = usuario::findCorreo($request["correo"]);
        if ($data === true) 
        {
            //agregar la verificacion de la contraseña hash con passwor veryfy//    
            session_start();
            $_SESSION["user"] = $data;
            header("Location: /src/views/admin/admin.php");
            
        }else {
                       
            echo "datos incorrectos" ;
        }

    }

        public static function loginA($request)
        {
            $data = usuario::findCorreo($request["correo"]);
            if ($data === true) 
            {
                //agregar la verificacion de la contraseña hash con passwor veryfy//    
                session_start();
                $_SESSION["user"] = $data;
                header("Location: /src/views/alumno/alumno.php");
                
            }else {
                           
                echo "datos incorrectos" ;
            }
        }
            public static function loginM($request)
            {
                $data = usuario::findCorreo($request["correo"]);
                if ($data === true) 
                {
                    //agregar la verificacion de la contraseña hash con passwor veryfy//    
                    session_start();
                    $_SESSION["user"] = $data;
                    header("Location: /src/views/maestros/maestro.php");
                    
                }else {
                               
                    echo "datos incorrectos" ;
                }
    }  

   


}



?>