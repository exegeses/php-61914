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

function verProductoPorID() : array | false
{
    $idProducto = $_GET['idProducto'];
    $link = conectar();
    $sql = "SELECT *, mkNombre, catNombre
                    FROM productos p
                    JOIN marcas m
                      ON p.idMarca =  m.idMarca
                    JOIN categorias c
                      ON c.idCategoria = p.idCategoria
               WHERE idProducto = ".$idProducto;
    try {
        $resultado = mysqli_query( $link, $sql );
        $producto = mysqli_fetch_assoc($resultado);
        return $producto;
    }
    catch ( Exception $e){
        /* log de errores y/o redirección */
        echo $e->getMessage();
        return false;
    }
}

    function subirImagen() : string
    {
        //si no envían imagen [agregar]
        $prdImagen = 'noDisponible.png';

        //si no envían imagen [modificar]
        if( isset($_POST['imgActual']) ){
            $prdImagen = $_POST['imgActual'];
        }

        //si ENVIARON una imagen
        if( $_FILES['prdImagen']['error'] == 0 ){
            $ruta = 'productos/';
            $tmp = $_FILES['prdImagen']['tmp_name'];
            ## renombramos archivo
            $time = time();
            $ext = pathinfo($_FILES['prdImagen']['name'], PATHINFO_EXTENSION);
            $prdImagen = $time.'.'.$ext;
            #### movemos archivo
            move_uploaded_file( $tmp, $ruta.$prdImagen );
        }

        return $prdImagen;
    }

    function agregarProducto() : bool
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        $prdImagen = subirImagen();

        $link = conectar();
        $sql = "INSERT INTO productos
                    VALUES
                    ( 
                         DEFAULT,
                         '".$prdNombre."',
                         ".$prdPrecio.",
                         ".$idMarca.",
                         ".$idCategoria.",
                         '".$prdDescripcion."',
                         '".$prdImagen."',
                         1
                     )";
        try {
            $resultado = mysqli_query($link, $sql);
            return $resultado;
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return  false;
        }

    }

    function modificarProducto() : bool
    {
        $link = conectar();
        $idProducto = $_POST['idProducto'];
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        $prdImagen = subirImagen();

        $sql = "UPDATE productos 
                   SET 
                       prdNombre = '".$prdNombre."',
                       prdPrecio = ".$prdPrecio.",
                       idMarca = ".$idMarca.",
                       idCategoria = ".$idCategoria.",
                       prdDescripcion = '".$prdDescripcion."',
                       prdImagen = '".$prdImagen."'
                  WHERE idProducto = ".$idProducto;

        try {
            $resultado = mysqli_query($link, $sql);
            return $resultado;
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return  false;
        }
    }


/*
 * listarProductos()
 * verProductoPorID()
 * agregarProducto()
 * modificarProducto()
 * eliminarProducto()
 * */