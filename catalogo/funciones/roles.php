<?php

function listarRoles() : mysqli_result | false
{
    $link = conectar();
    $sql = "SELECT idRol, rol FROM roles";

    try{
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    } catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
}