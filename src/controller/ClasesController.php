<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/model/Clase.php";

class ClaseController {



    public static function addClase($data)
    {     
        $addClase=Clase::addClase($data);
        $clases=Clase::findId(2);
        
        header("Location: /clases" );
    }

    public static function updateClase($data)
    {
        $updateClases= Clase::updateClase($data);
        
        header("Location: /clase" );
     
        
    }   

    public static function editaClase($id)
    {   
        $editaClase= Clase::editaClase($id);
        
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/clases/editaClases.php";
    } 

    public static function eliminaClase($id)
    {   
        $eliminaClase= Clase::eliminaClase($id);
        
        header("Location: /clase" );
    } 


    public static function clase()
    {   
        $clases = Clase::findClases(2);
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/clases/clases.php";
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