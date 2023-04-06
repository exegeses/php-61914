<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $check = agregarProducto();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Alta de un producto</h1>
<?php
    $mensaje = 'No se pudo agregar el producto';
    $css = 'danger';
    if ( $check ){
        $mensaje = 'Producto agregado correctamente';
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