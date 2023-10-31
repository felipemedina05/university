<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/model/Permiso.php";

class PermisoController {



    public static function addPermiso($data)
    {     
        $addPermiso=Permiso::addPermiso($data);
        $permisos=Permiso::findId(2);
        
        header("Location: /permiso" );
    }

    public static function updatePermiso($data)
    {
        $updatePermisos= Permiso::updatePermiso($data);
        
        header("Location: /permiso" );
     
        
    }   

    public static function editaPermiso($id)
    {   
        $editaPermiso= Permiso::editaPermiso($id);
        
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/permisos/editaPermisos.php";
    } 

    public static function eliminaPermiso($id)
    {   
        $eliminaPermiso= Permiso::eliminaPermiso($id);
        
        header("Location: /permiso" );
    } 


    public static function permiso()
    {   
        $permisos = Permiso::findPermisos(2);
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/permisos/permisos.php";
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