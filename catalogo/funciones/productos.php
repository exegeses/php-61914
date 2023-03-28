<?php

###### CRUD de productos #######

    function listarProductos() : mysqli_result | false
    {
        $link = conectar();
        $sql = "SELECT *, mkNombre, catNombre
                    FROM productos p
                    JOIN marcas m
                      ON p.idMarca =  m.idMarca
                    JOIN categorias c
                      ON c.idCategoria = p.idCategoria";
        try {
            $resultado = mysqli_query( $link, $sql );
            return $resultado;
        }
        catch ( Exception $e){
            /* log de errores y/o redirección */
            echo $e->getMessage();
            return false;
        }
    }

/*
 * listarProductos()
 * verProductoPorID()
 * agregarProducto()
 * modificarProducto()
 * eliminarProducto()
 * */