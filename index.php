<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/LoginController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/UserController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/MaestroController.php");

$LoginController = new LoginController();
$UserController = new UserController();
$MaestroController = new MaestroController();


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

        case '/updateEstudiante':
            $UserController->updateEstudiante($_POST);
            break;  
        
        case '/addAlumno':
            $UserController->addAlumno($_POST);
            break;  
        
        case '/updateMaestro':
            $MaestroController->updateMaestro($_POST);
            break;  
        
        case '/addMaestro':
            $MaestroController->addMaestro($_POST);
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
            $MaestroController->Clase();
            break;    
        
        case '/editaClase':
            $MaestroController->editaClase($_GET["id"]);
            break;  

        case '/eliminaClase':
            $MaestroController->eliminaClase($_GET["id"]);
            break;  

        case '/Clase':
            $MaestroController->Clase();
            break;       



       
        default:
            echo "no se encontro la url por get";
            break;
    }
}


?>