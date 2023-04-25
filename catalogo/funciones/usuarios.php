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

    function verUsuarioPorID() : array | false
    {
        $idUsuario = $_GET['idUsuario'];
        $link = conectar();
        $sql = "SELECT idUsuario, nombre, apellido, email,
                           idRol
                       FROM usuarios
                   WHERE idUsuario = ".$idUsuario;
        try {
            $resultado = mysqli_query($link, $sql);
            $usuario = mysqli_fetch_assoc($resultado);
            return  $usuario;
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

function modificarClave()
{
    //capturamos clave actual SIN ENCRIPTAR
    $clave = $_POST['clave'];
    /** obtenemos la contraseña encriptada **/
    $link = conectar();
    $sql  = "SELECT clave
                    FROM usuarios 
                    WHERE idUsuario = ".$_SESSION['idUsuario'];
    try {
        $resultado = mysqli_query( $link, $sql );
    }catch ( Exception $e ){
        $resultado = false;
        echo $e->getMessage();
    }
    //obtenemos clave encriptada
    $usuario = mysqli_fetch_assoc($resultado);
    $pwHash = $usuario['clave'];
    // las comparamos con password_verify()
    if ( password_verify( $clave, $pwHash ) ){
        // coinciden
        //encriptamos la clave nueva
        $newClave = $_POST['newClave'];
        $newClaveHash = password_hash($newClave,PASSWORD_DEFAULT);
        //modificamos en tabla usuarios
        $sql = "UPDATE usuarios 
                        SET clave = '".$newClaveHash."' 
                        WHERE idUsuario = ".$_SESSION['idUsuario'];
        try {
            $resultado = mysqli_query( $link, $sql );
        }catch ( Exception $e ){
            $resultado = false;
            echo $e->getMessage();
        }
        return $resultado;
    }
    //si no coinciden, redireccion a form de modificación
    header('location: formModificarClave.php?error=1');
}