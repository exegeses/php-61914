<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $check = modificarMarca();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Modificación de una marca</h1>
<?php
    $mensaje = 'No se pudo modificar la marca';
    $css = 'danger';
    if ( $check ){
        $mensaje = 'Marca modificada correctamente';
        $css = 'success';
    }
?>
        <div class="alert alert-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminMarcas.php" class="btn btn-light">
                volver a panel de marcas
            </a>
        </div>


    </main>

<?php
    include 'layout/footer.php';
?>