<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $check = agregarUsuario();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Registrio de un usuario</h1>
<?php
    $mensaje = 'No se pudo agregar el usuario';
    $css = 'danger';
    if ( $check ){
        $mensaje = 'Usiario agregado correctamente';
        $css = 'success';
    }
?>
        <div class="alert alert-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminUsuarios.php" class="btn btn-light">
                volver a panel de usuarios
            </a>
        </div>


    </main>

<?php
    include 'layout/footer.php';
?>