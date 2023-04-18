<?php
    require 'config/config.php';
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Ingreso a sistema</h1>

        <div class="alert bg-light p-4 col-8 mx-auto shadow">
            <form action="login.php" method="post">

                <label for="email">Usuario (email)</label>
                <input type="email" name="email"
                       class='form-control' id="email" required>
                <br>
                <label for="clave">Contraseña</label>
                <input type="password" name="clave"
                       class='form-control' id="clave" required>
                <br>
                <button class="btn btn-dark my-2 px-4">
                    Ingresar
                </button>
            </form>
        </div>
<?php
        if( isset( $_GET['error']) ){
            $error = $_GET['error'];
/*            switch( $error ){
                case 1:
                    $mensaje = 'Nombre de usuario y/o contraseña incorrectos.';
                    break;
                case 2:
                    $mensaje = 'Debe loguearse para ingresar';
                    break;
                case 3:
                    $mensaje = 'otro mensaje';
                    break;
            }*/
            $mensaje = match( $error ){
                '1' => 'Nombre de usuario y/o contraseña incorrectos.',
                '2' => 'Debe loguearse para ingresar',
                '3' => 'Otro mensaje'
            };
?>        
        <div class="alert alert-danger p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
        </div>
<?php
        }
?>
            
    </main>

<?php  include 'layout/footer.php';  ?>