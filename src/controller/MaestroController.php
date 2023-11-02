<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/model/Maestro.php";

class MaestroController {



    public static function addMaestro($data)
    {     
        $addMaestro=Maestro::addMaestro($data);
        $maestros=Maestro::findId(2);
        
        header("Location: /maestro" );
    }

    public static function updateMaestro($data)
    {
        $updateMaestros= Maestro::updateMaestro($data);
        
        header("Location: /maestro" );
     
        
    }   

    public static function editaMaestro($id)
    {   
        $editaMaestro= Maestro::editaMaestro($id);
        $listaClases = Maestro::Clases();
        
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/maestros/editaMaestros.php";
    } 

    public static function eliminaMaestro($id)
    {   
        $eliminaMaestro= Maestro::eliminaMaestro($id);
        
        header("Location: /maestro" );
    } 


    public static function maestro()
    {   
        $maestros = Maestro::findMaestros(2);
        $listaClases = Maestro::Clases();

        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/maestros/maestros.php";
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