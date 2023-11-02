<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/model/Permiso.php";

class PermisoController {

    public static function updatePermiso($data)
    {  
        $permisos = Permiso::all();
        $updatePermiso=Permiso::updatePermiso($data);
      
        header("Location: /permisos" );
    }    

     public static function editaPermiso($id)
    {  
        /* $maestros = Permiso::findId(2); */
        $roles = Permiso::findrol();
        $permisos = Permiso::all();
        $dataActual=Permiso::findId($id);
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/permisos/editaPermisos.php";
       
    } 


    public static function Permiso()
    {   
       
        $permisos = Permiso::all();
        
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