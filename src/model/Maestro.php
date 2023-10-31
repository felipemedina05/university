<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Maestro

{
    public static function all()
    {
        $res = DB::query("select * from usuarios");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function findCorreo($correo)
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

    public static function eliminaAlumno($id)
    {
        var_dump($id);
        $res = DB::query("DELETE from usuarios where id = $id ;");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function updateestudiante($data)
    {
        $dni = $data["dni"];

        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $direccion = $data["direccion"];
        $fecha_nacimiento = $data["fecha_nacimiento"];
        $id = $data["id"];
        $rol_id = $data["rol_id"];

        $res = DB::query("UPDATE usuarios SET dni='$dni',nombre='$nombre',apellido='$apellido',direccion='$direccion',fecha_nacimiento  = '$fecha_nacimiento',rol_id='$rol_id' WHERE id='$id';");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
    }

    

    public static function addMaestro($data)
    {
       var_dump($data);
        $correo = $data["correo"];
        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $direccion = $data["direccion"];
        $fecha_nacimiento = $data["fecha_nacimiento"];
        $rol_id = "2";
        $contrasena = "1234";
        $clase_id=$data["clase_id"];
        

        $usuario = DB::query("INSERT INTO usuarios (correo,nombre,apellido,direccion,fecha_nacimiento,rol_id,contrasena) 
        VALUES ('$correo','$nombre','$apellido','$direccion','$fecha_nacimiento','$rol_id','$contrasena');");

        $res = DB::query("select * from usuarios where correo = '$correo'");
        $data = $res->fetch(PDO::FETCH_ASSOC);

        $id=$data["id"];

        var_dump($data);
        
        $clase = DB::query("INSERT INTO clases_maestros (clase_id,maestro_id) VALUES ('$clase_id','$id');");


        
    }

    public static function findMaestros($id)
    {
        $res = DB::query("SELECT u.id ,u.nombre,u.correo,u.direccion,u.fecha_nacimiento,cm.clase_id,c.clase_nombre 
        from
            usuarios u
        inner join clases_maestros cm on u.id = cm.maestro_id 
        inner join clases c on cm.clase_id = c.id
        where
            rol_id = $id ;");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        

        return $data;
    }

}
