<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/LoginController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/UserController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/MaestroController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/ClasesController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/PermisoController.php");

$LoginController = new LoginController();
$UserController = new UserController();
$MaestroController = new MaestroController();
$ClaseController = new ClaseController();
$PermisoController = new PermisoController();

$fullurl = $_SERVER["REQUEST_URI"];
$urlpartida = explode("?", $fullurl);
$url = $urlpartida[0];

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    switch ($url) {
        case '/login':
            $LoginController->login($_POST);
            break;

        case '/admin':
            $LoginController->login($_POST);
            break;

        case '/maestro':
            $LoginController->login($_POST);
            break;

        case '/alumno':
            $LoginController->login($_POST);
            break;
            /* metodos alumno post */
        case '/updateEstudiante':
            $UserController->updateEstudiante($_POST);
            break;  
        
        case '/addAlumno':
            $UserController->addAlumno($_POST);
            break;  
            /* metodos maestro post */
        case '/updateMaestro':
            $MaestroController->updateMaestro($_POST);
            break;  
        
        case '/addMaestro':
            $MaestroController->addMaestro($_POST);
            break;  
            /* metodos clase post */
        case '/updateClase':
            $ClaseController->updateClase($_POST);
            break;  
            
        case '/addClase':
            $ClaseController->addClase($_POST);
            break;             
           /* metodos permisos post */
           case '/updatePermiso':
            $PermisoController->updatePermiso($_POST);
            break;  
            
        case '/addPermiso':
            $PermisoController->addPermiso($_POST);
            break;             
                 
          
        
        default:
            echo "no se encontro la url por post";
            break;
    }
}


if ($_SERVER["REQUEST_METHOD"] === "GET")
{
    switch ($url) {
        case "/index.php":
            $UserController->index();
            break;

        case '/logout':
            $LoginController->logout();
            break; 
        
       /*  crud de admin para estudiantes */
         case '/updateEstudiante':
            $UserController->estudiante();
            break;    
        
        case '/editaAlumno':
            $UserController->editaAlumno($_GET["id"]);
            break;  

        case '/eliminaAlumno':
            $UserController->eliminaAlumno($_GET["id"]);
            break;  

        case '/estudiante':
            $UserController->estudiante();
            break;   

         /*  crud de admin para maestros */
        case '/updateMaestro':
            $MaestroController->maestro();
            break;    
        
        case '/editaMaestro':
            $MaestroController->editaMaestro($_GET["id"]);
            break;  

        case '/eliminaMaestro':
            $MaestroController->eliminaMaestro($_GET["id"]);
            break;  

        case '/maestro':
            $MaestroController->maestro();
            break; 
         /*  crud de admin para clases */
         case '/updateClase':
            $ClaseController->Clase();
            break;    
        
        case '/editaClase':
            $ClaseController->editaClase($_GET["id"]);
            break;  

        case '/eliminaClase':
            $ClaseController->eliminaClase($_GET["id"]);
            break;  

        case '/clases':
            $ClaseController->Clase();
            break;      
            
        /*  crud de admin para permisos */
        case '/updatePermiso':
            $PermisoController->Permiso();
            break;    
        
        case '/editaClase':
            $PermisoController->editaPermiso($_GET["id"]);
            break;  

        
        case '/permisos':
            $PermisoController->Permiso();
            break;   



       
        default:
            echo "no se encontro la url por get";
            break;
    }
}


?>