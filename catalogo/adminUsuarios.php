<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
        noEsAdmin();
	include 'layout/header.php';
	include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Panel de administración de usuarios</h1>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th colspan="2">
                        <a href="formAgregarUsuario.php" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><?= 'idUsuario' ?></td>
                    <td><?= 'nombre' ?></td>
                    <td><?= 'apellido' ?></td>
                    <td><?= 'email' ?></td>
                    <td><?= 'rol' ?></td>
                    <td>
                        <a href="formModificarUsuario.php?idUsuario=<?= 'idUsuario' ?>" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarUsuario.php?idUsuario=<?= 'idUsuario' ?>" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

    </main>

<?php  include 'layout/footer.php';  ?>