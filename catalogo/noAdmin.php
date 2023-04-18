<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>¡Advertencia!</h1>

        <p class="alert shadow text-danger col-8 mx-auto ">
            Debe ser administrador para realizar esta tarea.
        </p>

    </main>

<?php
    include 'layout/footer.php';
?>