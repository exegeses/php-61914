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

    function verMarcaPorID( $idMarca ) : array | false
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre 
                    FROM marcas
                    WHERE idMarca = ".$idMarca;
        try {
            $resultado = mysqli_query($link, $sql);
            $marca = mysqli_fetch_assoc($resultado);
            return $marca;
        }
        catch( Exception $e ){
            /* log de errores y/o redirección */
            echo $e->getMessage();
            return false;
        }
    }

    function agregarMarca(  ) : bool
    {
        $link = conectar();
        //capturamos el dato enviado rpo el form
        $mkNombre = $_POST['mkNombre'];
        $sql = "INSERT INTO marcas
                        ( mkNombre )
                    VALUES
                        ( '".$mkNombre."' )";

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

    function modificarMarca( ) : bool
    {
        $link = conectar();
        //capturamos detos enviados por el form
        $mkNombre = $_POST['mkNombre'];
        $idMarca = $_POST['idMarca'];
        $sql = "UPDATE marcas 
                    SET mkNombre = '".$mkNombre."'
                  WHERE idMarca = ".$idMarca;
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

    /**
     * Función para chequear si hay un producto de ese marca
     * @param int $idMarca
     * @return int
     */
    function checkProdXMarca( int $idMarca ) : int
    {
        $link = conectar();
        $sql = "SELECT 1
                    FROM productos 
                    WHERE idMarca = ".$idMarca;
        try {
            $resultado = mysqli_query($link, $sql);
            // return $resultado; // mysqli_result
            /* $marca = mysqli_fetch_assoc($resultado);
            return $marca; */
            $cantidad = mysqli_num_rows( $resultado );
            return $cantidad;
        }
        catch (Exception $e)
        {
            //log de errores o redirección
            echo $e->getMessage();
            return 0;
        }
    }

    function eliminarMarca() : bool
    {
        $idMarca = $_POST['idMarca'];
        $link = conectar();
        $sql = "DELETE FROM marcas
                  WHERE idMarca = ".$idMarca;
        try {
            $resultado = mysqli_query($link, $sql);
            return $resultado;
        }
        catch (Exception $e)
        {
            //log de errores o redirección
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