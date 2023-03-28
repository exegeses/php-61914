<?php

###### CRUD de marcas #######

    function listarMarcas() : mysqli_result | false
    {
        $link = conectar();
        $sql = "SELECT * FROM marcas";
        try {
            $resultado = mysqli_query($link, $sql);
            return $resultado;
        }
        catch ( Exception $e ){
            /* log de errores y/o redirección */
            echo $e->getMessage();
            return false;
        }
    }

/*
 * listarMarcas()
 * verMarcaPorID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * */