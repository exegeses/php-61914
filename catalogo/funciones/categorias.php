<?php

    function listarCategorias() : mysqli_result | null
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias";
        try {
            $resultado = mysqli_query( $link, $sql );
            return $resultado;
        }
        catch ( Exception $e )
        {
            /* log de errores | redirección */
            echo $e->getMessage();
            return null;
        }
    }