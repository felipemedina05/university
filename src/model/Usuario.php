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
    public static function updateestudiante($data)
    {   
        $dni=$data["dni"];
        
        $nombre=$data["nombre"];
        $apellido=$data["apellido"];
        $direccion=$data["direccion"];
        $fecha_nacimiento=$data["fecha_nacimiento"];
        $id=$data["id"];
        $rol_id=$data["rol_id"];

        $res = DB::query("UPDATE usuarios SET dni='$dni',nombre='$nombre',apellido='$apellido',direccion='$direccion',fecha_nacimiento  = '$fecha_nacimiento',rol_id='$rol_id' WHERE id='$id';");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        
    }

    public static function addUsuario($data)
    {   
        $dni=$data["dni"];
        $correo=$data["correo"];
        $nombre=$data["nombre"];
        $apellido=$data["apellido"];
        $direccion=$data["direccion"];
        $fecha_nacimiento=$data["fecha_nacimiento"];
        $rol_id="3";
        $contrasena="1234";

        $res = DB::query("INSERT INTO usuarios (dni,correo,nombre,apellido,direccion,fecha_nacimiento,rol_id,contrasena) 
                            VALUES ('$dni','$correo','$nombre','$apellido','$direccion','$fecha_nacimiento','$rol_id','$contrasena');" );
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        
    }
}

?>
