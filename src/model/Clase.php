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
 
    public static function eliminaClase($id)
    {

        $resClase = DB::query("DELETE from clases_maestros where maestro_id = $id ;");
        /* $res = DB::query("DELETE from usuarios where id = $id ;"); */
    }

    public static function updateClase($data)
    {
        

        $clase_nombre = $data["clase_nombre"];
        $maestro_id=$data["maestro_id"];
        $idclaseActual=$data["id_clase_actual"];
        $idmaestroActual=$data["id_maestro_actual"];
             
        $resclase = DB::query("UPDATE clases SET clase_nombre='$clase_nombre' WHERE id='$idclaseActual';");

        $resMaestro = DB::query("UPDATE clases_maestros SET maestro_id='$maestro_id' WHERE maestro_id='$idmaestroActual';");

    }



    public static function addClase($data)
    {
        
        $clase_nombre = $data["clase_nombre"];
        $maestro_id = $data["maestro_id"];



        $usuario = DB::query("INSERT INTO clases (clase_nombre) 
        VALUES ('$clase_nombre');");

        $res = DB::query("select * from clases where clase_nombre = '$clase_nombre'");
        $dataClase = $res->fetch(PDO::FETCH_ASSOC);

        $clase_id = $dataClase["id"];
       

        $clase = DB::query("INSERT INTO clases_maestros (clase_id,maestro_id) VALUES ('$clase_id','$maestro_id');");
    }


    public static function findClases($id)
    {

        
        $res = DB::query("SELECT
        u.id ,u.nombre,u.correo,u.direccion,u.fecha_nacimiento,cm.clase_id,c.clase_nombre,cm.maestro_id  
        from
            usuarios u
        inner join clases_maestros cm on u.id = cm.maestro_id 
        inner join clases c on cm.clase_id = c.id
        where
            rol_id = $id ;");

        $clases = $res->fetchAll(PDO::FETCH_ASSOC);


        return $clases;
    }

    public static function findmaestro($id)
    {

        $res = DB::query("SELECT
        u.id ,u.nombre,u.correo,u.direccion,u.fecha_nacimiento,cm.clase_id,c.clase_nombre,cm.maestro_id  
        from
            usuarios u
        inner join clases_maestros cm on u.id = cm.maestro_id 
        inner join clases c on cm.clase_id = c.id
        where
            u.id = $id ;");

        $clases = $res->fetchAll(PDO::FETCH_ASSOC);


        return $clases;

        
    }
}
