<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/LoginController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/UserController.php");

$LoginController = new LoginController();
$UserController = new UserController();


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
        
       /*  case '/admin':
            $UserController->Vadmin();
            break;    
                
        */
         case '/updateEstudiante':
            $UserController->estudiante();
            break;    
        
            case '/editaAlumno':
            $UserController->editaAlumno($_GET["id"]);
            break;  

            case '/estudiante':
                $UserController->estudiante();
                break;   

        case '/logout':
            $LoginController->logout();
            break; 

       
        default:
            echo "no se encontro la url por get";
            break;
    }
}


?>