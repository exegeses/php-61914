<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $check = modificarProducto();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Modificación de un producto</h1>
<?php
    $mensaje = 'No se pudo modificar el producto';
    $css = 'danger';
    if ( $check ){
        $mensaje = 'Producto modificado correctamente';
        $css = 'success';
    }
?>
        <div class="alert alert-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-light">
                volver a panel de productos
            </a>
        </div>


    </main>

<?php
    include 'layout/footer.php';
?>