<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Permiso

{
    public static function all()
    {
        $res = DB::query("select 
        u.id,correo,estado,rol_id,rol
        from usuarios u inner join roles r on u.rol_id  = r.id   ");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        
        return $data;
    }


    public static function findId($id)
    {
        $res = DB::query("select * from usuarios u inner join roles r on u.rol_id  = r.id where u.id = $id;");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);



        return $data;
    }

    public static function findrol()
    {
        $res = DB::query("select * from roles;");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);



        return $data;
    }
 
 
   

    public static function updatePermiso($data)
    {
        var_dump($data);

        $correo = $data["correo"];
        $rol_id=$data["rol_id"];
        $rol_id_actual=$data["rol_id_actual"];
        $correo_actual=$data["correo_actual"];
             
        $resclase = DB::query("UPDATE usuarios SET correo='$correo' WHERE correo='$correo_actual';");

        $resMaestro = DB::query("UPDATE usuarios SET rol_id='$rol_id' WHERE rol_id='$rol_id_actual';");

    }





   
 
}
