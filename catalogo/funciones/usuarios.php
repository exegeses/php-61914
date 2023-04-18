<?php

    function listarUsuarios() : mysqli_result | false
    {
        $link = conectar();
        $sql = "SELECT idUsuario, nombre, apellido, email,
                       rol
                   FROM usuarios u
                   JOIN roles r 
                       ON u.idRol = r.idRol";
        try {
            $resultado = mysqli_query($link, $sql);
            return  $resultado;
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return false;
        }
    }


    function agregarUsuario() : bool
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $clave = $_POST['clave']; //clave SIN encriptar

        //encriptamos la clave
        $pwHash = password_hash( $clave, PASSWORD_DEFAULT );

        $link = conectar();
        $sql = "INSERT INTO usuarios
                    VALUES 
                        ( 
                         DEFAULT,  
                         '".$nombre."',
                         '".$apellido."',
                         '".$email."',
                         '".$pwHash."',
                         DEFAULT,
                         DEFAULT
                         )";
        try {
            $resultado = mysqli_query( $link, $sql );
            return $resultado;
        }
        catch (Exception $e){
            echo $e->getMessage();
            return false;
        }

    }