<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/model/Clase.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/model/Maestro.php";

class ClaseController {



    public static function addClase($data)
    {     
        $addClase=Clase::addClase($data);
        
        
        header("Location: /clases" );
    }

   public static function updateClase($data)
   {    
        
        $updateClase = Clase::updateClase($data);
        header("Location: /clases" );
    
   }

    public static function editaClase($id)
    {  
        $maestros = Clase::findId(2); 
        $clases = Clase::findClases(2);
        $dataActual=Clase::findmaestro($id);
      
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/clases/editaClase.php";
    } 

    public static function eliminaClase($id)
    {   
        $eliminaClase= Clase::eliminaClase($id);
        
        header("Location: /clases" );
    } 


    public static function clase()
    {   
        $clases = Clase::findClases(2);
        $maestros = Clase::findId(2);
        
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

    public static function administrarClases($id)
    {   
        $clases = Clase::findClases(2);
        $maestros = Clase::findId(2);
        
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/alumno/clases.php";
        
    }

    public static function calificaciones($id)
    {   
        $calificaciones = Clase::findClases(2);
        $maestros = Clase::findId(2);
        
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/alumno/calificaciones.php";
        
    }
    

  


}



?>