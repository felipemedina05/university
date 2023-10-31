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
        $updateMaestro= Maestro::updateMaestro($data);
        $maestros=Maestro::findId(2);
        
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/maestros/maestros.php";
     
        
    }   

    public static function editaMaestro($id)
    {   
        $editaMaestro= Maestro::editaMaestro($id);
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/maestros/editaMaestros.php";
    } 

    public static function eliminaMaestro($id)
    {   
        $eliminaMaestro= Maestro::eliminaMaestro($id);
        $maestros=Maestro::findId(2);
        
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/maestros/maestros.php";
    } 


    public static function maestro()
    {   
        $maestros = Maestro::findMaestros(2);
        include $_SERVER ["DOCUMENT_ROOT"] . "/src/views/admin/maestros/maestros.php";
    }

   

   


}



?>