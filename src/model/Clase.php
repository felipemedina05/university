<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Clase

{
    public static function all()
    {
        $res = DB::query("select * from usuarios inner join clases");
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
    public static function editaClase($id)
    {
        $res = DB::query("select * from usuarios where id = $id ;");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function eliminaClase($id)
    {
        
        $resClase = DB::query("DELETE from clases_clases where clase_id = $id ;");
        $res = DB::query("DELETE from usuarios where id = $id ;");
        
    }

    public static function updateClase($data)
    {
        
        $id = $data["id"];
        
        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $direccion = $data["direccion"];
        $fecha_nacimiento = $data["fecha_nacimiento"];
        $clase_id = $data["clase_id"];

       
        $res = DB::query("UPDATE usuarios SET nombre='$nombre',apellido='$apellido',direccion='$direccion',fecha_nacimiento  = '$fecha_nacimiento' WHERE id='$id';");
       
        $resClase = DB::query("UPDATE clases_clases SET clase_id='$clase_id' WHERE clase_id='$id';");

        
    }

    

    public static function addClase($data)
    {
       var_dump($data);
        $clase_nombre = $data["clase_nombre"];
        $nombre = $data["nombre"];
        
        

        $usuario = DB::query("INSERT INTO clases (clase_nombre) 
        VALUES ('$clase_nombre');");

        $res = DB::query("select * from clases where clase_nombre = '$clase_nombre'");
        $data = $res->fetch(PDO::FETCH_ASSOC);

        $id=$data["id"];

        $res = DB::query("select * from clases_maestros where maestro_id = '$id'");
        $dataclase = $res->fetch(PDO::FETCH_ASSOC);

        $claseid=$dataclase["id"];

        var_dump($data);
        
        $clase = DB::query("INSERT INTO clases_maestros (clase_id,maestro_id) VALUES ('$claseid','$id');");


        
    }


    public static function findClases($id)
    {
        $res = DB::query("SELECT
        c.id ,
        c.clase_nombre,
        cm.maestro_id,
        u.nombre
    from
        clases c
    inner join clases_maestros cm 
    inner join usuarios u on cm.maestro_id = u.id  
    where
        rol_id = 2;");
            
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

       
        return $data ;
    }

  

}
