<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php") ;

class Usuario 

{
    public static function all() 
    {
        $res = DB::query("select * from usuarios");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;
        
    }

    public static function findCorreo ($correo)
    {
        $res = DB::query("select * from usuarios where correo = '$correo'");
        $data = $res->fetch(PDO::FETCH_ASSOC);

        return $data;
        
    }
    public static function findId($id)
    {
        $res = DB::query("select * from usuarios where rol_id = $id ;");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;

        
        
    }
    public static function editestudiante($id)
    {
        $res = DB::query("select * from usuarios where id = $id ;");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;

        
        
    }
}

?>